<?phpnamespace App\Services\Client\Contracts;use App\Models\Product;interface GetMakeOrder{    public function execute(Product $product, string $price_id): array;}