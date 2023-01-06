<?php //3d1a73bb905d10f071a1de4c264d8e33
/** @noinspection all */

namespace Laravel\Jetstream {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Laravel\Jetstream\_IH_TeamInvitation_C;
    use LaravelIdea\Helper\Laravel\Jetstream\_IH_TeamInvitation_QB;

    /**
     * @property int $id
     * @property int $team_id
     * @property string $email
     * @property string|null $role
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_TeamInvitation_QB onWriteConnection()
     * @method _IH_TeamInvitation_QB newQuery()
     * @method static _IH_TeamInvitation_QB on(null|string $connection = null)
     * @method static _IH_TeamInvitation_QB query()
     * @method static _IH_TeamInvitation_QB with(array|string $relations)
     * @method _IH_TeamInvitation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TeamInvitation_C|TeamInvitation[] all()
     * @ownLinks team_id,\App\Models\Team,id|team_id,\App\Models\Team,id
     * @mixin _IH_TeamInvitation_QB
     */
    class TeamInvitation extends Model {}
}
