<div class="card">
    <div class="image-box">
        <img class="first-img" :src="`/img/${productObj.primaryImage}`" alt="">
        <img class="second-img" :src="`/img/${productObj.secondaryImage}`" alt="">
        <span v-if="productObj.discount != null" class="discount">{{ productObj.discount }}</span>
        <span v-if="productObj.sostenibilita" class="sustain">Sostenibilità</span>
        <span class="heart">&hearts;</span>
    </div>
    <div class="text-box">
        <span class="brand">{{ productObj.marca }}</span>
        <h4>{{ productObj.modello }}</h4>
        <div class="price">
            <span v-if="productObj.fullPrice != null" class="new-price">{{ newPrice }} &euro;</span>
            <span :class="{'old-price': productObj.fullPrice != null}">{{ oldPrice }} &euro;</span>
        </div>
    </div>
</div>
