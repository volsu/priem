<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form about `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cg_level', 'cg_oop_name', 'cg_form', 'cg_base'], 'required', 'message' => ''],
            [['id', 'object1', 'object2', 'object3', 'ind_achivement', 'is_benefit', 'is_olymp', 'is_target', 'is_enrolled', 'priority', 'is_expelled', 'total_balls', 'is_concurs_out', 'is_rec_by_priority', 'is_rec_by_other', 'cg_unique_right', 'stat_plan', 'stat_quota'], 'integer'],
            [['type_document', 'order', 'oop_base', 'enrollee_code', 'enrollee_name', 'cg_code', 'cg_view', 'cg_oop_code', ], 'safe'],
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
        $query = User::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'object1' => $this->object1,
            'object2' => $this->object2,
            'object3' => $this->object3,
            'ind_achivement' => $this->ind_achivement,
            'is_benefit' => $this->is_benefit,
            'is_olymp' => $this->is_olymp,
            'is_target' => $this->is_target,
            'is_enrolled' => $this->is_enrolled,
            'priority' => $this->priority,
            'is_expelled' => $this->is_expelled,
            'total_balls' => $this->total_balls,
            'is_concurs_out' => $this->is_concurs_out,
            'is_rec_by_priority' => $this->is_rec_by_priority,
            'is_rec_by_other' => $this->is_rec_by_other,
            'cg_unique_right' => $this->cg_unique_right,
            'stat_plan' => $this->stat_plan,
            'stat_quota' => $this->stat_quota,
        ]);

        $query->andFilterWhere(['like', 'type_document', $this->type_document])
            ->andFilterWhere(['like', 'order', $this->order])
            ->andFilterWhere(['like', 'oop_base', $this->oop_base])
            ->andFilterWhere(['like', 'enrollee_code', $this->enrollee_code])
            ->andFilterWhere(['like', 'enrollee_name', $this->enrollee_name])
            ->andFilterWhere(['like', 'cg_code', $this->cg_code])
            ->andFilterWhere(['like', 'cg_view', $this->cg_view])
            ->andFilterWhere(['like', 'cg_form', $this->cg_form])
            ->andFilterWhere(['like', 'cg_oop_code', $this->cg_oop_code])
            ->andFilterWhere(['like', 'cg_oop_name', $this->cg_oop_name])
            ->andFilterWhere(['like', 'cg_level', $this->cg_level])
            ->andFilterWhere(['like', 'cg_base', $this->cg_base]);

        $query->orderBy([
            'is_olymp'      => SORT_DESC,
            'is_benefit'    => SORT_DESC,
            'is_target'     => SORT_DESC,
            'total_balls'   => SORT_DESC,
            'object1'       => SORT_DESC,
            'object2'       => SORT_DESC,
            'object3'       => SORT_DESC,
            'enrollee_name' => SORT_DESC
        ]);

        return $dataProvider;
    }
}
