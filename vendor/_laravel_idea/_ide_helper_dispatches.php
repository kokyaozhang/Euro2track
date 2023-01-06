<?php //4e261a27e6627138e126e9e8ae1b7b99
/** @noinspection all */

namespace Illuminate\Foundation\Console {

    use Illuminate\Foundation\Bus\PendingDispatch;

    /**
     * @method static PendingDispatch dispatch(array $data)
     * @method static void dispatchNow(array $data)
     */
    class QueuedCommand {}
}

namespace Illuminate\Queue {

    use Illuminate\Foundation\Bus\PendingDispatch;
    use Laravel\SerializableClosure\SerializableClosure;

    /**
     * @method static PendingDispatch dispatch(SerializableClosure $closure)
     * @method static void dispatchNow(SerializableClosure $closure)
     */
    class CallQueuedClosure {}
}

namespace Laravel\Fortify\Events {

    use App\Models\User;
    use Illuminate\Broadcasting\PendingBroadcast;

    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class RecoveryCodesGenerated {}
}

namespace Laravel\Jetstream\Events {

    use Illuminate\Broadcasting\PendingBroadcast;

    /**
     * @method static void dispatch($owner)
     * @method static PendingBroadcast broadcast($owner)
     */
    class AddingTeam {}

    /**
     * @method static void dispatch($team, $user)
     * @method static PendingBroadcast broadcast($team, $user)
     */
    class AddingTeamMember {}

    /**
     * @method static void dispatch($team, $email, $role)
     * @method static PendingBroadcast broadcast($team, $email, $role)
     */
    class InvitingTeamMember {}

    /**
     * @method static void dispatch($team, $user)
     * @method static PendingBroadcast broadcast($team, $user)
     */
    class RemovingTeamMember {}

    /**
     * @method static void dispatch($team, $user)
     * @method static PendingBroadcast broadcast($team, $user)
     */
    class TeamMemberAdded {}

    /**
     * @method static void dispatch($team, $user)
     * @method static PendingBroadcast broadcast($team, $user)
     */
    class TeamMemberRemoved {}

    /**
     * @method static void dispatch($team, $user)
     * @method static PendingBroadcast broadcast($team, $user)
     */
    class TeamMemberUpdated {}
}

namespace Maatwebsite\Excel\Jobs {

    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Foundation\Bus\PendingDispatch;
    use Maatwebsite\Excel\Concerns\FromQuery;
    use Maatwebsite\Excel\Concerns\FromView;
    use Maatwebsite\Excel\Files\TemporaryFile;

    /**
     * @method static PendingDispatch dispatch(object $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, array $data)
     * @method static void dispatchNow(object $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, array $data)
     */
    class AppendDataToSheet {}

    /**
     * @method static PendingDispatch dispatch(FromQuery $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, int $page, int $chunkSize)
     * @method static void dispatchNow(FromQuery $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, int $page, int $chunkSize)
     */
    class AppendQueryToSheet {}

    /**
     * @method static PendingDispatch dispatch(FromView $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex)
     * @method static void dispatchNow(FromView $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex)
     */
    class AppendViewToSheet {}

    /**
     * @method static PendingDispatch dispatch(object $export, TemporaryFile $temporaryFile, string $writerType)
     * @method static void dispatchNow(object $export, TemporaryFile $temporaryFile, string $writerType)
     */
    class QueueExport {}

    /**
     * @method static PendingDispatch dispatch(ShouldQueue $import = null)
     * @method static void dispatchNow(ShouldQueue $import = null)
     */
    class QueueImport {}
}
