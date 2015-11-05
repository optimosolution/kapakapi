<?php

/**
 * This is the model class for table "{{guitar}}".
 *
 * The followings are the available columns in table '{{guitar}}':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $artist
 * @property string $album
 * @property string $album_year
 * @property string $chords
 * @property string $youtube
 * @property integer $status
 * @property string $created_on
 * @property integer $created_by
 * @property string $modified_on
 * @property integer $modified_by
 */
class Guitar extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{guitar}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title', 'required'),
            array('status, created_by, modified_by', 'numerical', 'integerOnly' => true),
            array('title, artist', 'length', 'max' => 250),
            array('album', 'length', 'max' => 150),
            array('album_year', 'length', 'max' => 4),
            array('youtube', 'length', 'max' => 50),
            array('chords, description, created_on, modified_on', 'safe'),
            array('chords', 'file', 'types' => 'jpg,jpeg,gif,png', 'allowEmpty' => true, 'minSize' => 2, 'maxSize' => 1024 * 1024 * 5, 'tooLarge' => 'The file was larger than 5MB. Please upload a smaller file.', 'wrongType' => 'File format was not supported.', 'tooSmall' => 'File size was too small or empty.'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, title, description, artist, album, album_year, chords, youtube, status, created_on, created_by, modified_on, modified_by', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'artist' => 'Artist',
            'album' => 'Album',
            'album_year' => 'Year',
            'chords' => 'Chords',
            'youtube' => 'Youtube',
            'status' => 'Status',
            'created_on' => 'Created On',
            'created_by' => 'Created By',
            'modified_on' => 'Modified On',
            'modified_by' => 'Modified By',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('artist', $this->artist, true);
        $criteria->compare('album', $this->album, true);
        $criteria->compare('album_year', $this->album_year, true);
        $criteria->compare('chords', $this->chords, true);
        $criteria->compare('youtube', $this->youtube, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('created_on', $this->created_on, true);
        $criteria->compare('created_by', $this->created_by);
        $criteria->compare('modified_on', $this->modified_on, true);
        $criteria->compare('modified_by', $this->modified_by);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function search_fronend() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;
        $criteria->condition = 'status=1';

        $criteria->compare('id', $this->id);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('artist', $this->artist, true);
        $criteria->compare('album', $this->album, true);
        $criteria->compare('album_year', $this->album_year, true);
        $criteria->compare('chords', $this->chords, true);
        $criteria->compare('youtube', $this->youtube, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('created_on', $this->created_on, true);
        $criteria->compare('created_by', $this->created_by);
        $criteria->compare('modified_on', $this->modified_on, true);
        $criteria->compare('modified_by', $this->modified_by);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => Yii::app()->params['pageSize20'],
            ),
            'sort' => array('defaultOrder' => 'title')
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Guitar the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    //get picture
    public static function get_picture_grid($id) {
        $value = Guitar::model()->findByAttributes(array('id' => $id));
        $filePath = Yii::app()->basePath . '/../uploads/chords/' . $value->chords;
        if ((is_file($filePath)) && (file_exists($filePath))) {
            return CHtml::image(Yii::app()->baseUrl . '/uploads/chords/' . $value->chords, 'Picture', array('alt' => $value->title, 'class' => 'img-responsive', 'title' => $value->title, 'style' => ''));
        } else {
            return CHtml::image(Yii::app()->baseUrl . '/uploads/chords/chords.jpg', 'Picture', array('alt' => $value->title, 'class' => 'img-responsive', 'title' => $value->title, 'style' => ''));
        }
    }

}
