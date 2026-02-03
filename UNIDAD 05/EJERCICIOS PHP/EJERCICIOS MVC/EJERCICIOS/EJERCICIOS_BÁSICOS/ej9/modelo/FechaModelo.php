<?php
class FechaModelo {

    private $diasSemana = [
        'Monday' => 'Lunes',
        'Tuesday' => 'Martes',
        'Wednesday' => 'Miércoles',
        'Thursday' => 'Jueves',
        'Friday' => 'Viernes',
        'Saturday' => 'Sábado',
        'Sunday' => 'Domingo'
    ];

    private $meses = [
        'January' => 'Enero',
        'February' => 'Febrero',
        'March' => 'Marzo',
        'April' => 'Abril',
        'May' => 'Mayo',
        'June' => 'Junio',
        'July' => 'Julio',
        'August' => 'Agosto',
        'September' => 'Septiembre',
        'October' => 'Octubre',
        'November' => 'Noviembre',
        'December' => 'Diciembre'
    ];

    public function obtenerFechaFormato() {
        $diaSemana = $this->diasSemana[date('l')];
        $dia = date('d');
        $mes = $this->meses[date('F')];
        $año = date('Y');

        return "$diaSemana, $dia de $mes de $año";
    }

    public function obtenerHora() {
        return date('H:i');
    }

    public function obtenerFechaCompleta() {
        return $this->obtenerFechaFormato() . ' - ' . $this->obtenerHora();
    }

    public function obtenerSegundos() {
        return date('s');
    }
}
?>