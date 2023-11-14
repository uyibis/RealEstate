<template>
    <form id="listing_form" @submit="handleSubmit"   class="form-horizontal m-t-30">
        <div class="form-group">
            <label>Property Title :</label>
            <input type="text" name="title" class="form-control" v-model="old.title" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Price :</label>
            <input type="number" name="price" class="form-control"  v-model="old.price"  placeholder="Price">
        </div>
<!--        <div class="form-group">-->
<!--            <label>Square Feet :</label>-->
<!--            <input type="number" name="square_feet" class="form-control"  v-model="old.square_feet"  placeholder="Square Feet">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label>Lot Size :</label>-->
<!--            <input type="number" name="lot_size" class="form-control"   v-model="old.lot_size" placeholder="Lot Size">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label>Bedroom :</label>-->
<!--            <input type="number" name="bedroom" class="form-control"  v-model="old.bedroom" placeholder="Bedroom">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label>Bathroom :</label>-->
<!--            <input type="number" name="bathroom" class="form-control"  v-model="old.bathroom" placeholder="Bathroom">-->
<!--        </div>-->

        <div class="form-group">
            <label>Kitchen :</label>
            <select class="form-select" v-model="old.kitchen"  aria-label="Default select example">
                <option selected disabled>Where is the kitchen</option>
                <option value="inside">Inside</option>
                <option value="outside">Outside</option>
            </select>
<!--            <input type="number" name="garage" class="form-control"   v-model="old.garage" placeholder="Garage">-->
        </div>
        <div class="form-group">
            <label>Area :</label>
            <input type="text" name="city" class="form-control"   v-model="old.area" placeholder="Area">
        </div>
        <div class="form-group">
            <label>City :</label>
            <input type="text" name="city" class="form-control"   v-model="old.city" placeholder="City">
        </div>
        <div class="form-group">
            <label>Country :</label>
            <input type="text" name="country" class="form-control"   v-model="old.country" placeholder="Country">
        </div>
        <div class="form-group">
            <label>Description :</label>
            <textarea name="description" class="form-control"  v-model="old.description" rows="5"></textarea>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Realtor :</label>
            <div class="col-sm-12">
                <select  name="realtor_id" v-model="old.realtor_id" class="form-control form-control-line" required>
                    <option selected style="display:none">Select Realtor</option>
                    <template v-for="(realtor, index) in realtors">
                        <option v-if="realtor" :value="realtor.id" >{{ realtor.name }}</option>
                    </template>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Is Publish :</label>
            <div class="col-sm-12">
                <select  name="is_published" v-model="old.is_published" class="form-control form-control-line"  required>
                    <option selected style="display:none">Select Publish/Draft</option>
                    <option  value="1">Publish</option>
                    <option  value="0">Draft</option>
                </select>
            </div>
        </div>
        <div class="image-list">
            <div  v-for="(image, index) in selectedImages ">
                <img v-if="isImageFileType(image)" class="img-thumbnail" :src="image.url" :alt="image.name" />
                <div v-else >
                    <video class="video-thumbnail" :src="image.url" controls></video>
                    <br/>
                    <label>Video</label>
                </div>
            </div>
        </div>
        <Gallery @selected_images="applySelected" :gallery_url="gallery_url" :uploader_url="uploader_url" />
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
    <dialog_loader :show="loader"/>
</template>

<script>
import dialog_loader from "../../opencomponent/dialog_loader/dialog_loader.vue";
import Gallery from "../../opencomponent/gallery_dialog/Gallery.vue";

export default {
    name: "ApartmentListingForm",
    components: {
        dialog_loader,
        Gallery
    },

    // 'p_realtors'- list of realtors coming from backend
    // 'selectedImages'- selected image coming from component
    // 'p_old' - form data coming from backend
    // 'get_upload' - file uploader url from backend route,
    // 'gallery_url' - gallery media list url
    //

    props: ['p_realtors','gallery_url','uploader_url','form_url','type'],
    data(){
        return {
            realtors:[],
            old:{},
            loader:false,
            selectedImages:[]
        }
    }
    ,
    methods: {
        isImageFileType(file) {
            if (file.type && file.type.includes('image')) {
                return true;
            }
            return false;
        },
        applySelected(items_selected){
            this.selectedImages=items_selected;
            // console.log(items_selected);
        },
        async handleSubmit(event) {
            // Prevent the default form submission
            event.preventDefault();
            if (this.loader == false) {
                console.log(this.old)
                this.loader = true;
                //this.toast("hello", 'green');
                this.old.images = this.selectedImages;
                let res = await axios.post(this.form_url, this.old);
                if(res.status==1){
                    this.loader=false;
                }
                console.log()
            } else
                this.loader = false;
            console.log(JSON.stringify( this.old));
        },
        toast(text,bgColor){
            Toastify({
                text: text,
                className: "info",
                style: {
                    background: bgColor,
                }
            }).showToast();
        }

    },
    mounted() {
        this.realtors=JSON.parse(this.p_realtors);
        console.log('form_url', this.form_url);
        this.old.type=this.type;
        //console.log('realtors', this.realtors[0]);
        //  this.old=JSON.parse(this.p_old);
    }
}
</script>

<style scoped>
.video-thumbnail {
    max-width: 100%;
    height: 10em;
    z-index: -1;
}
img{
    height: 10em;
}
.image-list {
    display: flex;
    flex-wrap: wrap;
}
</style>
