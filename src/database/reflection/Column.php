<?php

namespace Auria\Database\Reflection;

/**
 * Description of Collumn
 *
 * @author nicholassouza
 */
class Column {

    /**
     * 	Tabela a qual esse campo pertence
     * 
     * @var Table $table 
     */
    public $table;

    /**
     *
     * @var string $name 
     */
    public $name;

    /**
     *
     * @var string $type 
     */
    public $type;

    /**
     *
     * @var int $size 
     */
    protected $size;

    /**
     *
     * @var int $decimals 
     */
    public $decimals;

    /**
     *
     * @var string[] $modifiers 
     */
    public $modifiers;

    /**
     * 	Tamanho maximo do texto que pode caber nessa coluna
     * 
     * @var int $char_size 
     */
    public $char_size;

    /**
     * 	Tamanho do numero que pode ser colocado nessa coluna no padrao
     * 	"QTD_INTEIROS,QTD_DECIMAIS"
     * 
     * @var string $num_size 
     */
    public $num_size;

    /**
     *
     * @var string $key 
     */
    public $key;

    /**
     * 	Retorna o tamanho maximo suportado pela coluna, em caso de valores tipo texto
     * um inteiro e retornado, em casos de valores do tipo numero um array e retornado 
     * contendo na primeira posiçao o numero de 
     * @return int|int[]
     */
    public function getSize() {

        if ($this->char_size == null) {
            return explode(',', $this->num_size);
        } else {
            return $this->char_size;
        }
    }

    /**
     * 	Retorna se essa coluna e uma chave primaria da tabela
     * 
     * @return boolean
     */
    public function isPK() {
        return trim($this->key) == "PRI";
    }

    /**
     * 	Retorna se os valores dessa coluna sao unicos.
     * OBS : Chaves primarias sao unicas e portanto retornam true;
     * 
     * @return boolean 
     */
    public function isUnique() {
        return in_array($this->key, array('PRI', 'UNI'));
    }

    /**
     * 	Retorna se existe algum indice presente nesse campo
     * 
     * @return boolean
     */
    public function isIndex() {
        return $this->key != "";
    }

}
