
<?php
class Alcancia {
    private $monedas;

    public function __construct() {
        $this->monedas = array("1" => 0, "2" => 0, "5" => 0, "10" => 0, "20" => 0, "50" => 0, "100" => 0, "200" => 0, "500" => 0, "1000" => 0);
    }

    public function agregarMoneda($denominacion) {
        if(array_key_exists($denominacion, $this->monedas)) {
            $this->monedas[$denominacion]++;
        } else {
            echo "Denominación no válida.";
        }
    }

    public function informarMonedas() {
        foreach($this->monedas as $denominacion => $cantidad) {
            echo "Tienes " . $cantidad . " monedas de $" . $denominacion . "\n";
        }
    }

    public function calcularTotal() {
        $total = 0;
        foreach($this->monedas as $denominacion => $cantidad) {
            $total += $denominacion * $cantidad;
        }
        return $total;
    }

    public function romperAlcancia() {
        $this->monedas = array("1" => 0, "2" => 0, "5" => 0, "10" => 0, "20" => 0, "50" => 0, "100" => 0, "200" => 0, "500" => 0, "1000" => 0);
    }
}
?>
