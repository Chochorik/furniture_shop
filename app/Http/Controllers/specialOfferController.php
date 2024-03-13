<?php

namespace App\Http\Controllers;

use App\Http\Requests\specialOfferRequest;
use App\Models\specialOffer;

class specialOfferController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', specialOffer::class);

        return specialOffer::all();
    }

    public function store(specialOfferRequest $request)
    {
        $this->authorize('create', specialOffer::class);

        return specialOffer::create($request->validated());
    }

    public function show(specialOffer $specialOffer)
    {
        $this->authorize('view', $specialOffer);

        return $specialOffer;
    }

    public function update(specialOfferRequest $request, specialOffer $specialOffer)
    {
        $this->authorize('update', $specialOffer);

        $specialOffer->update($request->validated());

        return $specialOffer;
    }

    public function destroy(specialOffer $specialOffer)
    {
        $this->authorize('delete', $specialOffer);

        $specialOffer->delete();

        return response()->json();
    }
}
