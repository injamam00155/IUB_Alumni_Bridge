use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $primaryKey = 'userEmail';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function student()
    {
        return $this->belongsTo(Student::class, 'userEmail');
    }
}
