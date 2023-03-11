<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController extends AbstractController
{
    #[Route('/add/{a}/{b}', name: 'calculator_add', methods: ['GET'])]
    public function add(Request $request, $a, $b): JsonResponse
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            return new JsonResponse([
                'result' => 'Error'
            ]);
        }
        $result = $a + $b;

        return new JsonResponse([
            'result' => $result
        ]);
    }

    #[Route('/subtract/{a}/{b}', name: 'calculator_subtract', methods: ['GET'])]
    public function subtract(Request $request, $a, $b): JsonResponse
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            return new JsonResponse([
                'result' => 'Error'
            ]);
        }
        $result = $a - $b;

        return new JsonResponse([
            'result' => $result
        ]);
    }

    #[Route('/multiply/{a}/{b}', name: 'calculator_multiply', methods: ['GET'])]
    public function multiply(Request $request, $a, $b): JsonResponse
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            return new JsonResponse([
                'result' => 'Error'
            ]);
        }
        $result = $a * $b;

        return new JsonResponse([
            'result' => $result
        ]);
    }

    #[Route('/divide/{a}/{b}', name: 'calculator_divide', methods: ['GET'])]
    public function divide(Request $request, $a, $b): JsonResponse
    {
        if (!is_numeric($a) || !is_numeric($b) || $b == 0 )  {
            $result = 'Error';

            return new JsonResponse([
                'result' => $result
            ]);
        }

        $result = $a / $b;
        if (is_float($result) && strlen(substr(strrchr($result, "."), 1)) > 5) {
            $result = number_format($result, 5, '.', '');
        }
        return new JsonResponse([
            'result' => $result
        ]);
    }

    #[Route('/exponent/{a}/{b}', name: 'calculator_exponent', methods: ['GET'])]
    public function exponent(Request $request, $a, $b): JsonResponse
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            return new JsonResponse([
                'result' => 'Error'
            ]);
        }
        $result = pow($a, $b);        
        $result =  ($result === INF || $result === NAN) ? 'Error' : $result;
        return new JsonResponse([
            'result' => $result
        ]);
    }

    #[Route('/percentage/{a}/{b}', name: 'calculator_percentage', methods: ['GET'])]
    public function percentage(Request $request, $a, $b): JsonResponse
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            return new JsonResponse([
                'result' => 'Error'
            ]);
        }
        if ($b == 0) {
            $result = 'Error';

            return new JsonResponse([
                'result' => $result
            ]);
        }

        $result = ($a * $b) / 100;        
        return new JsonResponse([
            'result' => $result
        ]);
    }
}
