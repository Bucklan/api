<?phpnamespace App\Tasks\Client;use App\Models\User;use App\Repositories\UserRepInterface;class FindByPhoneTask{    public function __construct(private readonly UserRepInterface $repository)    {    }    public function run(        string $phone,        array  $columns = ['*'],        array  $relations = [],        array  $relations_count = []    ): ?User    {        return $this->repository->findByPhone($phone, $columns, $relations, $relations_count);    }}