<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property float $rating
 * @property int $hit
 * @property float $price
 * @property float $final_price
 * @property string $slug
 * @property string $file1
 * @property string $file2
 * @property string $file3
 * @property string $path
 * @property int $count
 * @property int $points
 * @property int $category_id
 * @property int $brand_id
 * @property int $promotion_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Brand $brand
 * @property \App\Model\Entity\Promotion $promotion
 * @property \App\Model\Entity\ProductDetail[] $product_details
 */
class Product extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
