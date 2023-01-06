<?php //1c9fa3c19377176eff1cba29ec232fda
/** @noinspection all */

namespace App\Models {

    use Database\Factories\TeamFactory;
    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_Breakdown_C;
    use LaravelIdea\Helper\App\Models\_IH_Breakdown_QB;
    use LaravelIdea\Helper\App\Models\_IH_Fieldequip_C;
    use LaravelIdea\Helper\App\Models\_IH_Fieldequip_QB;
    use LaravelIdea\Helper\App\Models\_IH_Membership_C;
    use LaravelIdea\Helper\App\Models\_IH_Membership_QB;
    use LaravelIdea\Helper\App\Models\_IH_Post_C;
    use LaravelIdea\Helper\App\Models\_IH_Post_QB;
    use LaravelIdea\Helper\App\Models\_IH_Report_C;
    use LaravelIdea\Helper\App\Models\_IH_Report_QB;
    use LaravelIdea\Helper\App\Models\_IH_Student_C;
    use LaravelIdea\Helper\App\Models\_IH_Student_QB;
    use LaravelIdea\Helper\App\Models\_IH_TeamInvitation_C;
    use LaravelIdea\Helper\App\Models\_IH_TeamInvitation_QB;
    use LaravelIdea\Helper\App\Models\_IH_Teamuser_C;
    use LaravelIdea\Helper\App\Models\_IH_Teamuser_QB;
    use LaravelIdea\Helper\App\Models\_IH_Team_C;
    use LaravelIdea\Helper\App\Models\_IH_Team_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;

    /**
     * @property int $id
     * @property string $Identification_No
     * @property string $Reference_No
     * @property Carbon $Breakdown_date
     * @property string $Breakdown_problem
     * @property string $Breakdown_parts
     * @property string $Description
     * @property Carbon $Complete_date
     * @property string $Action_by
     * @property string $Reviewed_by
     * @property string $Remarks
     * @method static _IH_Breakdown_QB onWriteConnection()
     * @method _IH_Breakdown_QB newQuery()
     * @method static _IH_Breakdown_QB on(null|string $connection = null)
     * @method static _IH_Breakdown_QB query()
     * @method static _IH_Breakdown_QB with(array|string $relations)
     * @method _IH_Breakdown_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Breakdown_C|Breakdown[] all()
     * @ownLinks Identification_No,\App\Models\Fieldequip,Identification_No
     * @mixin _IH_Breakdown_QB
     */
    class Breakdown extends Model {}

    /**
     * @property string $Identification_No
     * @property string $Equipment_Name
     * @property string $category
     * @property string $Serial_No
     * @property string $Software_Version
     * @property string $Manufacturer_Name
     * @property string $Supplier_Name
     * @property string $classification
     * @property Carbon $date_received
     * @property Carbon $Service_date
     * @property string $Location
     * @property string $Operation_Section
     * @property string $Manual_Location
     * @property string $Authorized_User
     * @property string $equip_limit
     * @property string $Technical_Info
     * @property string $Grouping
     * @property string $Frequency
     * @property string $Executor
     * @property string $Registrant
     * @property Carbon $Registrant_date
     * @property string $Authorizer
     * @property Carbon $Authorized_date
     * @property string $Declaration
     * @property Carbon $Declaration_date
     * @property string $Comment
     * @property string $Comment_Approver
     * @property Carbon $Comment_Approval_date
     * @property string $Notified_By
     * @method static _IH_Fieldequip_QB onWriteConnection()
     * @method _IH_Fieldequip_QB newQuery()
     * @method static _IH_Fieldequip_QB on(null|string $connection = null)
     * @method static _IH_Fieldequip_QB query()
     * @method static _IH_Fieldequip_QB with(array|string $relations)
     * @method _IH_Fieldequip_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Fieldequip_C|Fieldequip[] all()
     * @foreignLinks Identification_No,\App\Models\Breakdown,Identification_No
     * @mixin _IH_Fieldequip_QB
     */
    class Fieldequip extends Model {}

    /**
     * @method static _IH_Membership_QB onWriteConnection()
     * @method _IH_Membership_QB newQuery()
     * @method static _IH_Membership_QB on(null|string $connection = null)
     * @method static _IH_Membership_QB query()
     * @method static _IH_Membership_QB with(array|string $relations)
     * @method _IH_Membership_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Membership_C|Membership[] all()
     * @mixin _IH_Membership_QB
     */
    class Membership extends Model {}

    /**
     * @method static _IH_Post_QB onWriteConnection()
     * @method _IH_Post_QB newQuery()
     * @method static _IH_Post_QB on(null|string $connection = null)
     * @method static _IH_Post_QB query()
     * @method static _IH_Post_QB with(array|string $relations)
     * @method _IH_Post_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Post_C|Post[] all()
     * @mixin _IH_Post_QB
     */
    class Post extends Model {}

    /**
     * @property string $Identification_No
     * @property string $Equipment_Name
     * @property string $category
     * @property string $Serial_No
     * @property string $Software_Version
     * @property string $Manufacturer_Name
     * @property string $Supplier_Name
     * @property string $classification
     * @property Carbon $date_received
     * @property Carbon $Service_date
     * @property string $Location
     * @property string $Operation_Section
     * @property string $Manual_Location
     * @property string $Authorized_User
     * @property string $equip_limit
     * @property string $Technical_Info
     * @property string $Grouping
     * @property string $Frequency
     * @property string $Executor
     * @property string $Registrant
     * @property Carbon $Registrant_date
     * @property string $Authorizer
     * @property Carbon $Authorized_date
     * @property string $Declaration
     * @property Carbon $Declaration_date
     * @property string $Comment
     * @property string $Comment_Approver
     * @property Carbon $Comment_Approval_date
     * @property string $Notified_By
     * @method static _IH_Report_QB onWriteConnection()
     * @method _IH_Report_QB newQuery()
     * @method static _IH_Report_QB on(null|string $connection = null)
     * @method static _IH_Report_QB query()
     * @method static _IH_Report_QB with(array|string $relations)
     * @method _IH_Report_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Report_C|Report[] all()
     * @foreignLinks Identification_No,\App\Models\Breakdown,Identification_No
     * @mixin _IH_Report_QB
     */
    class Report extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $gender
     * @property string $grade
     * @property string $email
     * @property string $mobile_number
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Student_QB onWriteConnection()
     * @method _IH_Student_QB newQuery()
     * @method static _IH_Student_QB on(null|string $connection = null)
     * @method static _IH_Student_QB query()
     * @method static _IH_Student_QB with(array|string $relations)
     * @method _IH_Student_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Student_C|Student[] all()
     * @mixin _IH_Student_QB
     */
    class Student extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property string $name
     * @property bool $personal_team
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Team_QB onWriteConnection()
     * @method _IH_Team_QB newQuery()
     * @method static _IH_Team_QB on(null|string $connection = null)
     * @method static _IH_Team_QB query()
     * @method static _IH_Team_QB with(array|string $relations)
     * @method _IH_Team_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Team_C|Team[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @foreignLinks id,\App\Models\TeamInvitation,team_id|id,\App\Models\TeamInvitation,team_id|id,\App\Models\Teamuser,team_id
     * @mixin _IH_Team_QB
     * @method static TeamFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Team extends Model {}

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

    /**
     * @property int $id
     * @property int $team_id
     * @property int $user_id
     * @property string|null $role
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read string $profile_photo_url attribute
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_Teamuser_QB onWriteConnection()
     * @method _IH_Teamuser_QB newQuery()
     * @method static _IH_Teamuser_QB on(null|string $connection = null)
     * @method static _IH_Teamuser_QB query()
     * @method static _IH_Teamuser_QB with(array|string $relations)
     * @method _IH_Teamuser_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Teamuser_C|Teamuser[] all()
     * @ownLinks team_id,\App\Models\Team,id|user_id,\App\Models\User,id
     * @mixin _IH_Teamuser_QB
     */
    class Teamuser extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property int|null $current_team_id
     * @property string|null $profile_photo_path
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $two_factor_secret
     * @property string|null $two_factor_recovery_codes
     * @property Carbon|null $two_factor_confirmed_at
     * @property-read string $profile_photo_url attribute
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @foreignLinks id,\App\Models\Team,user_id|id,\App\Models\Teamuser,user_id
     * @mixin _IH_User_QB
     * @method static UserFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class User extends Model {}
}
