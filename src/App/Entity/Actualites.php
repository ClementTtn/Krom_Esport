<?php

namespace App\Entity;

class Actualites
{
    private $id;
    private $titre;
    private $date_parution;
    private $sous_titre;
    private $texte;
    private $img_article;
    private $img_texte_1;
    private $img_texte_2;
    private $img_texte_3;
    private $img_texte_4;
    private $video;
    private $auteur;


    public function __construct(array $data){
        $this->hydrate($data);
    }

    public function hydrate(array $donnees) : void
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
            {
                $this->$method($value);

            }
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getDateParution()
    {
        return $this->date_parution;
    }

    /**
     * @param mixed $date_parution
     */
    public function setDateParution($date_parution): void
    {
        $this->date_parution = $date_parution;
    }

    /**
     * @return mixed
     */
    public function getSousTitre()
    {
        return $this->sous_titre;
    }

    /**
     * @param mixed $sous_titre
     */
    public function setSousTitre($sous_titre): void
    {
        $this->sous_titre = $sous_titre;
    }

    /**
     * @return mixed
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * @param mixed $texte
     */
    public function setTexte($texte): void
    {
        $this->texte = $texte;
    }

    /**
     * @return mixed
     */
    public function getImgArticle()
    {
        return $this->img_article;
    }

    /**
     * @param mixed $img_article
     */
    public function setImgArticle($img_article): void
    {
        $this->img_article = $img_article;
    }

    /**
     * @return mixed
     */
    public function getImgTexte1()
    {
        return $this->img_texte_1;
    }

    /**
     * @param mixed $img_texte_1
     */
    public function setImgTexte1($img_texte_1): void
    {
        $this->img_texte_1 = $img_texte_1;
    }

    /**
     * @return mixed
     */
    public function getImgTexte2()
    {
        return $this->img_texte_2;
    }

    /**
     * @param mixed $img_texte_2
     */
    public function setImgTexte2($img_texte_2): void
    {
        $this->img_texte_2 = $img_texte_2;
    }

    /**
     * @return mixed
     */
    public function getImgTexte3()
    {
        return $this->img_texte_3;
    }

    /**
     * @param mixed $img_texte_3
     */
    public function setImgTexte3($img_texte_3): void
    {
        $this->img_texte_3 = $img_texte_3;
    }

    /**
     * @return mixed
     */
    public function getImgTexte4()
    {
        return $this->img_texte_4;
    }

    /**
     * @param mixed $img_texte_4
     */
    public function setImgTexte4($img_texte_4): void
    {
        $this->img_texte_4 = $img_texte_4;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     */
    public function setVideo($video): void
    {
        $this->video = $video;
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param mixed $auteur
     */
    public function setAuteur($auteur): void
    {
        $this->auteur = $auteur;
    }


    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return ("Actualites");
    }

}