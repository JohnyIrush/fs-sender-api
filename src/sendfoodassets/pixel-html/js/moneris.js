var monerisCheckout = (function() {
    var mode = "";
    var request_url = "";
    var checkout_div = "moneris-checkout";
    var fullscreen = "T";

    var callbacks = {
        page_loaded: "",
        cancel_transaction: "",
        payment_receipt: "",
        payment_complete: "",
        error_event: ""
    };

    function monerisCheckout() {
        var me = this;
        /*
    			window.addEventListener('message', function(e) 
    	    	 {
    				console.log("setting receive message");
    				me.receivePostMessage(e);
    	    	});
				*/

        var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
        var eventHandler = window[eventMethod];
        var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
        eventHandler(messageEvent, me.receivePostMessage, false);
    };

    monerisCheckout.prototype.logConfig = function() {
        console.log("callbacks: " + JSON.stringify(callbacks));
        console.log("request_url: " + request_url);
        console.log("checkout_div: " + checkout_div);
    };

    monerisCheckout.prototype.setCheckoutDiv = function(name) {
        checkout_div = name;
    };

    monerisCheckout.prototype.setMode = function(setmode) {
        mode = setmode;
        if (mode == 'dev') {
            request_url = "https://gatewaydev.moneris.com/chkt/display/index.php";
        } else if (mode == 'qa') {
            request_url = "https://gatewayt.moneris.com/chkt/display/index.php";
        } else {
            request_url = "https://gateway.moneris.com/chkt/display/index.php";
        }
    };

    monerisCheckout.prototype.setCallback = function(name, func) {
        if (name in callbacks) {
            callbacks[name] = func;
        } else {
            console.log("setCallback - Invalid callback defined: " + name);
        }
    };

    monerisCheckout.prototype.startCheckout = function(ticket) {
        fullscreen = ticket.slice(-1);

        console.log("fullscreen is : " + fullscreen);

        document.getElementById(checkout_div).innerHTML = "";
        checkoutUrl = request_url + "?tck=" + ticket;

        var chkt_target = document.getElementById(checkout_div);

        if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
            //$("#"+checkout_div).css({ "position":"absolute", "left":"0", "top":"0", "border":"none", "background":"#FAFAFA", "z-index":"100000","min-width":"100%","width":"100%","min-height":"100%","height":"100%" });

            if (fullscreen == 'T') {
                chkt_target.style.position = 'absolute';
                chkt_target.style.left = '0';
                chkt_target.style.top = '0';
            }

            chkt_target.style.border = 'none';
            chkt_target.style.background = '#FAFAFA';
            chkt_target.style.zindex = '100000';
            chkt_target.style.minWidth = '100%';
            chkt_target.style.width = '100%';
            chkt_target.style.minHeight = '100%';
            chkt_target.style.height = '100%';

            var chkt_iframe = document.createElement('iframe');
            chkt_iframe.setAttribute('id', checkout_div + '-Frame');
            chkt_iframe.setAttribute('src', checkoutUrl);
            chkt_iframe.setAttribute('allowpaymentrequest', 'true');
            chkt_iframe.style.width = '100%';
            chkt_iframe.style.height = '100%';
            chkt_iframe.style.border = 'none';

            chkt_target.appendChild(chkt_iframe);

            if (fullscreen == 'T') {

                var chkt_html_css = document.createElement('style');
                chkt_html_css.type = 'text/css';
                var chkt_html_style = ".checkoutHtmlStyleFromiFrame { max-width:100%; width:100%; overflow:hidden !important; }"

                if (chkt_html_css.styleSheet) chkt_html_css.styleSheet.cssText = chkt_html_style;
                else chkt_html_css.appendChild(document.createTextNode(chkt_html_style));

                document.body.classList.add("checkoutHtmlStyleFromiFrame");
            }
        } else {
            if (fullscreen == 'T') {
                chkt_target.style.position = 'fixed';
                chkt_target.style.left = '0';
                chkt_target.style.top = '0';
            }
            chkt_target.style.border = 'none';
            chkt_target.style.background = '#FAFAFA';
            chkt_target.style.zindex = '100000';
            chkt_target.style.minWidth = '100%';
            chkt_target.style.width = '100%';
            chkt_target.style.minHeight = '100%';
            chkt_target.style.height = '100%';

            var chkt_iframe = document.createElement('iframe');
            chkt_iframe.setAttribute('id', checkout_div + '-Frame');
            chkt_iframe.setAttribute('src', checkoutUrl);
            chkt_iframe.setAttribute('allowpaymentrequest', 'true');
            chkt_iframe.style.width = '100%';
            chkt_iframe.style.height = '100%';
            chkt_iframe.style.border = 'none';

            chkt_target.appendChild(chkt_iframe);

            if (fullscreen == 'T') {
                var chkt_html_css = document.createElement('style');
                chkt_html_css.type = 'text/css';
                var chkt_html_style = ".checkoutHtmlStyleFromiFrame { position:fixed; width:100%; overflow:hidden !important; }"

                if (chkt_html_css.styleSheet) chkt_html_css.styleSheet.cssText = chkt_html_style;
                else chkt_html_css.appendChild(document.createTextNode(chkt_html_style));

                document.body.classList.add("checkoutHtmlStyleFromiFrame");
            }
        }

        return;
    };

    monerisCheckout.prototype.startCheckoutHandler = function(response) {
        if (response.success == 'true') {
            console.log(response.url);
            //insert iframe into div #moneris-checkout
        } else {
            callbacks.error_event(response.error);
        }
    };

    monerisCheckout.prototype.closeCheckout = function() {
        var frameRef = document.getElementById(checkout_div + "-Frame").contentWindow;
        var request = JSON.stringify({ action: "close_request" });
        frameRef.postMessage(request, request_url);
    };

    monerisCheckout.prototype.sendPostMessage = function(request) {
        var frameRef = document.getElementById(checkout_div + "-Frame").contentWindow;
        frameRef.postMessage(request, request_url + 'chkt/display/request.php');
        return false;
    };

    monerisCheckout.prototype.receivePostMessage = function(resp) {
        try {
            var response_json = resp.data;
            var respObj = JSON.parse(response_json);

            if (respObj.rev_action == 'height_change') {
                console.log("this is new height:" + respObj.outerHeight);

                document.getElementById(checkout_div + "-Frame").style.height = respObj.outerHeight + "px";

                //	$("#"+checkout_div+"-Frame").css({"height":  respObj.outerHeight + "px"});
                //	$("#"+checkout_div).css({"height":  respObj.outerHeight + "px"});

            } else {
                if (respObj["handler"] == "close_checkout") {
                    var chkt_target = document.getElementById(checkout_div);

                    chkt_target.style.position = 'static';
                    chkt_target.style.width = '0px';
                    chkt_target.style.minHeight = '0px';
                    chkt_target.style.height = '0px%';

                    document.getElementById(checkout_div).innerHTML = "";
                    document.body.classList.remove("checkoutHtmlStyleFromiFrame");
                } else {
                    var callback = callbacks[respObj["handler"]];
                    if (typeof callback === "function") {
                        callback(response_json);
                    }
                }
            }
        } catch (e) {
            console.log("got a non standard post message");
            console.log(e);
        }
    };

    monerisCheckout.prototype.setNewShippingRates = function(json) {
        this.sendPostMessage(json);
    };

    return monerisCheckout;
})();