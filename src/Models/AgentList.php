<?php
namespace Cchivhima\Sendfood\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cchivhima\Sendfood\Models\AgentLocation;

class AgentList extends Model
{
    use HasFactory;

    public function agentlocation()
    {
        return $this->hasOne(AgentLocation::class);
    }
}
