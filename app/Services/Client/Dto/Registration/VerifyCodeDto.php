<?phpnamespace App\Services\Client\Dto\Registration;use Spatie\DataTransferObject\DataTransferObject;class VerifyCodeDto extends DataTransferObject{    public string $phone;    public string $verification_code;    public ?string $device_token;}