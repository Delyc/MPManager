<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * Class AgentCommission
 *
 * @package  App\Models
 * @property int $id
 * @property double $energy_commission
 * @property double $appliance_commission
 * @property double $risk_balance
 */
class AgentCommission extends BaseModel
{

    public function agent(): HasMany
    {
        return $this->hasMany(Agent::Class);
    }
    public function history(): MorphOne
    {
        return $this->morphOne(AgentBalanceHistory::class, 'trigger');
    }
}
