<?php 
 
 namespace App\Repositories\Eloquent;

use App\Models\Accommodation;
use App\Repositories\AccommodationRepositoryInterface;
use Illuminate\Support\Collection;

class AccommodationRepository implements AccommodationRepositoryInterface
{
    public function all(): Collection
    {
        return Accommodation::all();
    }

    public function find(int $id): ?Accommodation
    {
        return Accommodation::find($id);
    }

    public function create(array $data): Accommodation
    {
        return Accommodation::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $accommodation = Accommodation::find($id);

        if (!$accommodation) {
            return false;
        }

        $accommodation->update($data);

        return true;
    }

    public function delete(int $id): bool
    {
        $accommodation = Accommodation::find($id);

        if (!$accommodation) {
           
            return false;
        }
    
        $accommodation->delete();
    
        return true;
    }
}    