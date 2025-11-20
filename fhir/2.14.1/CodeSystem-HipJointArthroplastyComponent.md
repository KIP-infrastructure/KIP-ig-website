# Hip joint arthroplasty - components - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hip joint arthroplasty - components**

## CodeSystem: Hip joint arthroplasty - components 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HipJointArthroplastyComponent | *Version*:2.14.1 |
| Active as of 2022-11-16 | *Computable Name*:HipJointArthroplastyComponent |

 
Hip joint arthroplasty - components 

 This Code system is referenced in the content logical definition of the following value sets: 

* [KomponentAcetabulumDHR](ValueSet-KomponentAcetabulumDHR.md)
* [KomponentFemurDHR](ValueSet-KomponentFemurDHR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HipJointArthroplastyComponent",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HipJointArthroplastyComponent",
  "version" : "2.14.1",
  "name" : "HipJointArthroplastyComponent",
  "title" : "Hip joint arthroplasty - components",
  "status" : "active",
  "date" : "2022-11-16T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Hip joint arthroplasty - components",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 83,
  "concept" : [
    {
      "code" : "depuy_bi_mentum_cemented_cup",
      "display" : "DePuy: BI MENTUM CEMENTED CUP",
      "definition" : "DePuy: BI MENTUM CEMENTED CUP"
    },
    {
      "code" : "depuy_bi_mentum_plus_cup",
      "display" : "DePuy: BI MENTUM PLUS CUP",
      "definition" : "DePuy: BI MENTUM PLUS CUP"
    },
    {
      "code" : "depuy_bi_mentum_pressfit_cup",
      "display" : "DePuy: BI MENTUM PRESSFIT CUP",
      "definition" : "DePuy: BI MENTUM PRESSFIT CUP"
    },
    {
      "code" : "depuy_bi_mentum_revision_cup",
      "display" : "DePuy: BI MENTUM REVISION CUP",
      "definition" : "DePuy: BI MENTUM REVISION CUP"
    },
    {
      "code" : "depuy_pinnacle_gripton",
      "display" : "DePuy: Pinnacle Gription",
      "definition" : "DePuy: Pinnacle Gription"
    },
    {
      "code" : "depuy_pinnacle_porocoat",
      "display" : "DePuy: Pinnacle Porocoat",
      "definition" : "DePuy: Pinnacle Porocoat"
    },
    {
      "code" : "implant_cast_mutars_lumic",
      "display" : "Implantcast: Mutars Lumic",
      "definition" : "Implantcast: Mutars Lumic"
    },
    {
      "code" : "link_lubinus",
      "display" : "Link: Lubinus",
      "definition" : "Link: Lubinus"
    },
    {
      "code" : "ortotech_saturne",
      "display" : "Ortotech: Saturne",
      "definition" : "Ortotech: Saturne"
    },
    {
      "code" : "ortotech_saturne_reconstruction",
      "display" : "Ortotech: Saturne rekonstruktion",
      "definition" : "Ortotech: Saturne rekonstruktion"
    },
    {
      "code" : "serf_fischer_medical_novae_coptos_th",
      "display" : "Serf/Fischer Medical: Novae Coptos TH (Serf)",
      "definition" : "Serf: Novae Coptos TH"
    },
    {
      "code" : "serf_fischer_medical_novae_e_th",
      "display" : "Serf/Fischer Medical: Novae E TH (Serf) ",
      "definition" : "Serf: Novae E TH"
    },
    {
      "code" : "serf_fischer_medical_novae_stick",
      "display" : "Serf/Fischer Medical: Novae Stick (Serf)",
      "definition" : "Serf: Novae Stick"
    },
    {
      "code" : "serf_fischer_medical_novae_sunfit",
      "display" : "Serf/Fischer Medical: Novae Sunfit (Serf)",
      "definition" : "Serf: Novae Sunfit"
    },
    {
      "code" : "smith&nephew_bhr",
      "display" : "Smith & Nephew: BHR",
      "definition" : "Smith & Nephew: BHR (Acetabulum + Femur)"
    },
    {
      "code" : "smith&nephew_polarcup",
      "display" : "Smith & Nephew: Polarcup",
      "definition" : "Smith & Nephew: Polarcup"
    },
    {
      "code" : "smith&nephew_r3",
      "display" : "Smith & Nephew: R3",
      "definition" : "Smith & Nephew: R3"
    },
    {
      "code" : "stryker_contemporary",
      "display" : "Stryker: Contemporary",
      "definition" : "Stryker: Contemporary"
    },
    {
      "code" : "stryker_exeter_rimfit_x3",
      "display" : "Stryker: Exeter Rimfit X3",
      "definition" : "Stryker: Exeter Rimfit X3"
    },
    {
      "code" : "stryker_restoration_anatomical",
      "display" : "Stryker: Restoration Anatomical (Stryker)",
      "definition" : "Stryker: Restoration Anatomical"
    },
    {
      "code" : "stryker_trident_ad_hemispheric",
      "display" : "Stryker: Trident AD hemisfærisk",
      "definition" : "Stryker: Trident AD hemisfærisk"
    },
    {
      "code" : "stryker_trident_ad_psl",
      "display" : "Stryker: Trident AD PSL",
      "definition" : "Stryker: Trident AD PSL"
    },
    {
      "code" : "stryker_trident_all_poly",
      "display" : "Stryker: Trident All Poly",
      "definition" : "Stryker: Trident All Poly"
    },
    {
      "code" : "stryker_trident_ii",
      "display" : "Stryker: Trident II",
      "definition" : "Stryker: Trident II"
    },
    {
      "code" : "stryker_trident_ii_psl",
      "display" : "Stryker: Trident II PSL",
      "definition" : "Stryker: Trident II PSL"
    },
    {
      "code" : "stryker_trident_ii_tritanium",
      "display" : "Stryker: Trident II Tritanium",
      "definition" : "Stryker: Trident II Tritanium"
    },
    {
      "code" : "stryker_trident_tritanium_primary",
      "display" : "Stryker: Trident Tritanium primary",
      "definition" : "Stryker: Trident Tritanium primary"
    },
    {
      "code" : "stryker_trident_tritanium_revision",
      "display" : "Stryker: Trident Tritanium Revision",
      "definition" : "Stryker: Trident Tritanium Revision"
    },
    {
      "code" : "zimmer_biomet_advantage",
      "display" : "Zimmer Biomet: Avantage",
      "definition" : "Zimmer Biomet: Avantage"
    },
    {
      "code" : "zimmer_biomet_exceed_abt",
      "display" : "Zimmer Biomet: Exceed ABT",
      "definition" : "Zimmer Biomet: Exceed ABT"
    },
    {
      "code" : "zimmer_biomet_exceed_cemented_flanged_e1",
      "display" : "Zimmer Biomet: Exceed Cemented Flanged E1",
      "definition" : "Zimmer Biomet: Exceed Cemented Flanged E1"
    },
    {
      "code" : "zimmer_biomet_exceed_cemented_muller_e1",
      "display" : "Zimmer Biomet: Exceed Cemented Muller E1",
      "definition" : "Zimmer Biomet: Exceed Cemented Muller E1"
    },
    {
      "code" : "zimmer_biomet_exceed_cemented_non_flanged_e1",
      "display" : "Zimmer Biomet: Exceed Cemented Non Flanged E1",
      "definition" : "Zimmer Biomet: Exceed Cemented Non Flanged E1"
    },
    {
      "code" : "zimmer_biomet_g7_osseoti_coating",
      "display" : "Zimmer Biomet: G7 OsseoTi coating ",
      "definition" : "Zimmer Biomet: G7 OsseoTi coating "
    },
    {
      "code" : "zimmer_biomet_g7_pps",
      "display" : "Zimmer: G7 PPS",
      "definition" : "Zimmer: G7 PPS"
    },
    {
      "code" : "zimmer_biomet_mallory_head",
      "display" : "Zimmer Biomet: Mallory-Head",
      "definition" : "Zimmer Biomet: Mallory-Head"
    },
    {
      "code" : "zimmer_biomet_mueller",
      "display" : "Zimmer Biomet: Müller",
      "definition" : "Zimmer Biomet: Müller"
    },
    {
      "code" : "zimmer_biomet_regenerex_revision_acetabular",
      "display" : "Zimmer Biomet: Regenerex ™ Revision Acetabular",
      "definition" : "Zimmer Biomet: Regenerex ™ Revision Acetabular"
    },
    {
      "code" : "zimmer_biomet_tmt_continuum",
      "display" : "Zimmer Biomet: TMT Continuum (Zimmer-Biomet)",
      "definition" : "Zimmer Biomet: TMT Continuum"
    },
    {
      "code" : "zimmer_biomet_tmt_modular_cup",
      "display" : "Zimmer Biomet: TMT Modular Cup",
      "definition" : "Zimmer Biomet: TMT Modular Cup"
    },
    {
      "code" : "zimmer_biomet_tmt_revision",
      "display" : "Zimmer Biomet: TMT Revision",
      "definition" : "Zimmer Biomet: TMARS"
    },
    {
      "code" : "zimmer_biomet_trilogy",
      "display" : "Zimmer Biomet: Trilogy",
      "definition" : "Zimmer Biomet: Trilogy"
    },
    {
      "code" : "zimmer_biomet_trilogy_it",
      "display" : "Zimmer: Trilogy IT",
      "definition" : "Zimmer: Trilogy IT"
    },
    {
      "code" : "zimmer_biomet_zca",
      "display" : "Zimmer Biomet: ZCA",
      "definition" : "Zimmer Biomet: ZCA"
    },
    {
      "code" : "depuy_corail_collar",
      "display" : "DePuy: Corail m/krave",
      "definition" : "DePuy: Corail m/krave"
    },
    {
      "code" : "depuy_corail_without_collar",
      "display" : "DePuy: Corail u/krave",
      "definition" : "DePuy: Corail u/krave"
    },
    {
      "code" : "depuy_corail_revision_stem",
      "display" : "DePuy: Corail Revision Stem - KAR",
      "definition" : "DePuy: Corail Revision Stem - KAR"
    },
    {
      "code" : "depuy_c_stem_amt",
      "display" : "DePuy: C-stem AMT",
      "definition" : "DePuy: C-stem AMT"
    },
    {
      "code" : "depuy_summit",
      "display" : "DePuy: Summit",
      "definition" : "DePuy: Summit"
    },
    {
      "code" : "implantcast_mutars_proximal_femoral_replacement",
      "display" : "Implantcast: Mutars proksimal femoral replacement",
      "definition" : "Implantcast: Mutars proksimal femoral replacement"
    },
    {
      "code" : "lima_h_max_lateralized",
      "display" : "Lima: H-MAX: Lateralized",
      "definition" : "Lima: H-MAX: Lateralized"
    },
    {
      "code" : "lima_h_max_standard",
      "display" : "Lima: H-MAX: Standard",
      "definition" : "Lima: H-MAX: Standard"
    },
    {
      "code" : "link_link_mp",
      "display" : "Link: Link MP",
      "definition" : "Link: Link MP"
    },
    {
      "code" : "link_lubinus_sp_ii",
      "display" : "Link: Lubinus SP II",
      "definition" : "Link: Lubinus SP II"
    },
    {
      "code" : "peter_brehm_gmbh_mrp_titan",
      "display" : "Peter Brehm GmbH: MRP-Titan ",
      "definition" : "Peter Brehm GmbH: MRP-Titan "
    },
    {
      "code" : "smith&nephew_polarstem",
      "display" : "Smith & Nephew: Polarstem",
      "definition" : "Smith & Nephew: Polarstem"
    },
    {
      "code" : "stryker_acolade_ii",
      "display" : "Stryker: Accolade II ",
      "definition" : "Stryker: Accolade II "
    },
    {
      "code" : "stryker_exeter_primary_v40",
      "display" : "Stryker: Exeter Primary V40",
      "definition" : "Stryker: Exeter Primary V40"
    },
    {
      "code" : "stryker_gmrs_proximal_femoral_component",
      "display" : "Stryker: GMRS Proximal Femoral Component (Stryker)",
      "definition" : "Stryker: GMRS Proximal Femoral Component"
    },
    {
      "code" : "stryker_restoration_modular",
      "display" : "Stryker: Restoration modular",
      "definition" : "Stryker: Restoration modular"
    },
    {
      "code" : "viking_medical_cfp",
      "display" : "Viking Medical: C.F.P.",
      "definition" : "Viking Medical: C.F.P."
    },
    {
      "code" : "zimmer_biomet_arcos_revision",
      "display" : "Zimmer Biomet: Arcos revision",
      "definition" : "Zimmer Biomet: Arcos revision"
    },
    {
      "code" : "zimmer_biomet_avenir_cemented_stem",
      "display" : "Zimmer Biomet: Avenir cemented stem",
      "definition" : "Zimmer Biomet: Avenir cemented stem"
    },
    {
      "code" : "zimmer_biomet_avenir_cementless_stem",
      "display" : "Zimmer Biomet: Avenir cementless stem ",
      "definition" : "Zimmer Biomet: Avenir cementless stem"
    },
    {
      "code" : "zimmer_biomet_avenir_complete",
      "display" : "Zimmer Biomet: Avenir complete",
      "definition" : "Zimmer Biomet: Avenir complete"
    },
    {
      "code" : "zimmer_biomet_bimetrix_without_collar_chrome_cobalt",
      "display" : "Zimmer Biomet: Bimetric u/krave chrom/cobolt",
      "definition" : "Zimmer Biomet: Bimetric u/krave chrom/cobolt"
    },
    {
      "code" : "zimmer_biomet_bimetric_without_collar_titaneum",
      "display" : "Zimmer Biomet: Bimetric u/krave titaneum",
      "definition" : "Zimmer Biomet: Bimetric u/krave titaneum"
    },
    {
      "code" : "zimmer_biomet_cls_spotorno",
      "display" : "Zimmer Biomet: CLS Spotorno",
      "definition" : "Zimmer Biomet: CLS Spotorno"
    },
    {
      "code" : "zimmer_biomet_cpt",
      "display" : "Zimmer Biomet: CPT",
      "definition" : "Zimmer Biomet: CPT"
    },
    {
      "code" : "zimmer_biomet_echo_bi_metric_hip_stem_full_proximal_profile",
      "display" : "Zimmer Biomet: Echo Bi-metric Hip Stem Full Proximal Profile",
      "definition" : "Zimmer Biomet: Echo Bi-metric Hip Stem Full Proximal Profile"
    },
    {
      "code" : "zimmer_biomet_echo_bi_metric_reduced_proximal_profile",
      "display" : "Zimmer Biomet: Echo Bi-Metric Reduceret Proximal Profil",
      "definition" : "Zimmer Biomet: Echo Bi-Metric Reduceret Proximal Profil"
    },
    {
      "code" : "zimmer_biomet_fitmore",
      "display" : "Zimmer Biomet: Fitmore (Zimmer-Biomet) ",
      "definition" : "Zimmer Biomet: Fitmore"
    },
    {
      "code" : "zimmer_biomet_ms_30",
      "display" : "Zimmer Biomet: MS-30 (Zimmer-Biomet)",
      "definition" : "Zimmer Biomet: MS-30"
    },
    {
      "code" : "zimmer_biomet_primoris",
      "display" : "Zimmer Biomet: Primoris",
      "definition" : "Zimmer Biomet: Primoris"
    },
    {
      "code" : "zimmer_biomet_revitan_revision_hip_system",
      "display" : "Zimmer Biomet: Revitan Revision Hip System",
      "definition" : "Zimmer Biomet: Revitan Revision Hip System"
    },
    {
      "code" : "zimmer_biomet_stanmore",
      "display" : "Zimmer Biomet: Stanmore",
      "definition" : "Zimmer Biomet: Stanmore"
    },
    {
      "code" : "zimmer_biomet_taperloc",
      "display" : "Zimmer Biomet: Taperloc",
      "definition" : "Zimmer Biomet: Taperloc"
    },
    {
      "code" : "zimmer_biomet_wagner_cone",
      "display" : "Zimmer Biomet: Wagner Cone",
      "definition" : "Zimmer Biomet: Wagner Cone"
    },
    {
      "code" : "zimmer_biomet_wagner_sl",
      "display" : "Zimmer Biomet: Wagner SL",
      "definition" : "Zimmer Biomet: Wagner SL"
    },
    {
      "code" : "zimmer_biomet_zmr_porous_coated",
      "display" : "Zimmer Biomet: ZMR porous-coated",
      "definition" : "Zimmer Biomet: ZMR porous-coated"
    },
    {
      "code" : "zimmer_biomet_zmr_splined",
      "display" : "Zimmer Biomet: ZMR splined",
      "definition" : "Zimmer Biomet: ZMR splined"
    },
    {
      "code" : "zimmer_biomet_zmr_taper",
      "display" : "Zimmer Biomet: ZMR Taper",
      "definition" : "Zimmer Biomet: ZMR Taper"
    },
    {
      "code" : "zimmer_biomet_zmr_taper_xl",
      "display" : "Zimmer Biomet: ZMR Taper XL",
      "definition" : "Zimmer Biomet: ZMR Taper XL"
    }
  ]
}

```
