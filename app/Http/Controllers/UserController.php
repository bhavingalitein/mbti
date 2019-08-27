<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class UserController extends Controller
{
    /**
     *
     * @return Response
     */
    public function showQuestion()
    {
        return view('index', ['questions' => []]);
    }

    public function showResult(Request $request)
    {
        $ranks = $request->get('rank');
        $email = $request->get('email');
        $res = $data = [];
        if (!empty($ranks)) {
            foreach ($ranks as $qst => $rank) {
                if ($rank > 4) {
                    if (in_array($qst, [1,3,5,6,10])) {
                        $dimension = $this->questionDimension($qst);

                        $res[] = $dimension['mn'];
                    }
                } elseif ($rank < 4) {
                    if (in_array($qst, [2,4,7,8,9])) {
                        $dimension = $this->questionDimension($qst);

                        $res[] = $dimension['mn'];
                    }
                }
            }

            $uniqueRes = array_count_values($res);
            $data = $this->calType($uniqueRes);
        }

        return view('result', ['data' => $data, 'email' => $email]);
    }

    private function calType($array = [])
    {
        $res = [];
        if (isset($array['I']) && isset($array['E'])) {
            if ($array['E'] > $array['I']) {
                $res[] = 'E';
            } else {
                $res[] = 'I';
            }
        } elseif (isset($array['I'])) {
            $res[] = 'I';
        } elseif (isset($array['E'])) {
            $res[] = 'E';
        }

        if (isset($array['S']) && isset($array['N'])) {
            if ($array['S'] > $array['N']) {
                $res[] = 'S';
            } else {
                $res[] = 'N';
            }
        } elseif (isset($array['S'])) {
            $res[] = 'S';
        } elseif (isset($array['N'])) {
            $res[] = 'N';
        }

        if (isset($array['T']) && isset($array['F'])) {
            if ($array['T'] > $array['F']) {
                $res[] = 'T';
            } else {
                $res[] = 'F';
            }
        } elseif (isset($array['T'])) {
            $res[] = 'T';
        } elseif (isset($array['F'])) {
            $res[] = 'F';
        }

        if (isset($array['J']) && isset($array['P'])) {
            if ($array['J'] > $array['P']) {
                $res[] = 'J';
            } else {
                $res[] = 'P';
            }
        } elseif (isset($array['J'])) {
            $res[] = 'J';
        } elseif (isset($array['P'])) {
            $res[] = 'P';
        }

        return $res;
    }

    private function questionDimension($key="")
    {
        $array = [
            1 => [
                'dm' => 'EI',
                'dr' => '1',
                'mn' => 'I'
            ],
            2 => [
                'dm' => 'SN',
                'dr' => '-1',
                'mn' => 'S'
            ],
            3 => [
                'dm' => 'TF',
                'dr' => '1',
                'mn' => 'F'
            ],
            4 => [
                'dm' => 'EI',
                'dr' => '-1',
                'mn' => 'E'
            ],
            5 => [
                'dm' => 'SN',
                'dr' => '1',
                'mn' => 'N'
            ],
            6 => [
                'dm' => 'JP',
                'dr' => '1',
                'mn' => 'P'
            ],
            7 => [
                'dm' => 'TF',
                'dr' => '-1',
                'mn' => 'T'
            ],
            8 => [
                'dm' => 'JP',
                'dr' => '-1',
                'mn' => 'J'
            ],
            9 => [
                'dm' => 'EI',
                'dr' => '-1',
                'mn' => 'E'
            ],
            10 => [
                'dm' => 'JP',
                'dr' => '1',
                'mn' => 'P'
            ],
        ];

        if (!empty($key)) {
            return $array[$key];
        }

        return $array;
    }
}