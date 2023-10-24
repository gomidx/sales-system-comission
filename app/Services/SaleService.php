<?php

namespace App\Services;

use App\Interfaces\SaleRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class SaleService
{
    private SaleRepositoryInterface $saleRepository;

    public function __construct() 
    {
        $this->saleRepository = new SaleRepositoryInterface;
    }

    public function createSale(array $saleDetails): array
    {
        $sale = $this->saleRepository->createSale($saleDetails);

        return [
            'data' => $sale
        ];
    }

    public function getSale(int $saleId): array
    {
        $sale = $this->saleRepository->getSaleById($saleId);

        return [
            'data' => $sale
        ];
    }

    public function getSalesBySellerId(int $sellerId): array
    {
        $sales = $this->saleRepository->getSalesBySellerId($sellerId);

        return [
            'data' => $sales
        ];
    }

    public function getSales(): array
    {
        $sales = $this->saleRepository->getSales();

        return [
            'data' => $sales
        ];
    }

    public function updateSale(int $saleId, array $saleDetails): array
    {
        $sale = $this->saleRepository->updateSale($saleId, $saleDetails);

        return [
            'data' => $sale
        ];
    }

    public function deleteSale(int $saleId): array
    {
        $sale = $this->saleRepository->deleteSale($saleId);

        return [
            'data' => $sale
        ];
    }
}