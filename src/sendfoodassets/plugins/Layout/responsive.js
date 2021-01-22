/**
 * Make the pages
 * Responsive
*/
class Responsive {
    constructor(id) {
      this.id = id;
    }
    /**
     * Fit application theme
     * height
    */
    fitBrowserHeight()
    {
        document.getElementById(this.id).style.height = window.innerHeight +'px';

    }
  }

 // window.onresize = fitBrowserHeight;
 