<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Documents;

/**
 * DocumentsSearch represents the model behind the search form about `app\models\Documents`.
 */
class DocumentsSearch extends Documents
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reference_no'], 'integer'],
            [['subject', 'doc_date', 'doc_for', 'doc_from', 'drawer_id', 'doc_name', 'doc_file'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Documents::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'reference_no' => $this->reference_no,
            'doc_date' => $this->doc_date,
        ]);

        $query->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'doc_for', $this->doc_for])
            ->andFilterWhere(['like', 'doc_from', $this->doc_from])
            ->andFilterWhere(['like', 'drawer_id', $this->drawer_id])
              ->andFilterWhere(['like', 'doc_name', $this->doc_name])
            ->andFilterWhere(['like', 'doc_file', $this->doc_file]);

        return $dataProvider;
    }
}
