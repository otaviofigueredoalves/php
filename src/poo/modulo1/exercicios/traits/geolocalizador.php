<?php
trait T_GeoLocalizavel
{
    abstract function getLatitude() : float;
    abstract function getLongitude() : float;
    public function calcularDistancia(float $lat, float $long) : string
    {
        $latitude = $this->getLatitude();
        $longitude = $this->getLongitude();

        $distancia = sqrt(pow($latitude - $lat,2) + pow($longitude - $long, 2));

        return "A distância é de ". round($distancia,2) . " unidades.";
    }
}

class LojaFisica
{
    use T_GeoLocalizavel;

    public function __construct(public string $nome, private float $lat, private float $lon)
    {}

    public function getLatitude(): float
    {
        return $this->lat;
    }
    public function getLongitude(): float
    {
        return $this->lon;
    }
}

class Evento
{
    use T_GeoLocalizavel;

    public function __construct(public string $nome, private array $coordenadas)
    {
        
    }
    public function getLatitude(): float
    {
        return $this->coordenadas['lat'];
    }
    public function getLongitude(): float
    {
       return $this->coordenadas['lon'];   
    }
}

$loja = new LojaFisica("Overworld", -23.50, 46.70);
$evento = new Evento("Show", ['lat' => -22.90, 'lon' => -43.17]);

$latDestino = $evento->getLatitude();
$lonDestino = $evento->getLongitude();

echo $loja->calcularDistancia($latDestino, $lonDestino);