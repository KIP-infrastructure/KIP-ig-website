# Komponent - acetabulum (DHR) - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komponent - acetabulum (DHR)**

## ValueSet: Komponent - acetabulum (DHR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomponentAcetabulumDHR | *Version*:2.15.0 |
| Active as of 2022-11-16 | *Computable Name*:KomponentAcetabulumDHR |

 
Komponent - acetabulum (DHR) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 43 concepts

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "KomponentAcetabulumDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomponentAcetabulumDHR",
  "version" : "2.15.0",
  "name" : "KomponentAcetabulumDHR",
  "title" : "Komponent - acetabulum (DHR)",
  "status" : "active",
  "experimental" : true,
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
  "description" : "Komponent - acetabulum (DHR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HipJointArthroplastyComponent",
        "concept" : [
          {
            "code" : "depuy_bi_mentum_cemented_cup",
            "display" : "DePuy: BI Mentum Cemented Cup"
          },
          {
            "code" : "depuy_bi_mentum_plus_cup",
            "display" : "DePuy: BI Mentum Plus Cup"
          },
          {
            "code" : "depuy_bi_mentum_pressfit_cup",
            "display" : "DePuy: BI Mentum Pressfit Cup"
          },
          {
            "code" : "depuy_bi_mentum_revision_cup",
            "display" : "DePuy: BI Mentum Revision Cup"
          },
          {
            "code" : "depuy_pinnacle_gripton",
            "display" : "DePuy: Pinnacle Gription"
          },
          {
            "code" : "depuy_pinnacle_porocoat",
            "display" : "DePuy: Pinnacle Porocoat"
          },
          {
            "code" : "implant_cast_mutars_lumic",
            "display" : "Implantcast: Mutars Lumic"
          },
          {
            "code" : "link_lubinus",
            "display" : "Link: Lubinus"
          },
          {
            "code" : "ortotech_saturne",
            "display" : "Ortotech: Saturne"
          },
          {
            "code" : "ortotech_saturne_reconstruction",
            "display" : "Ortotech: Saturne rekonstruktion"
          },
          {
            "code" : "serf_fischer_medical_novae_coptos_th",
            "display" : "Serf: Novae Coptos TH"
          },
          {
            "code" : "serf_fischer_medical_novae_e_th",
            "display" : "Serf: Novae E TH"
          },
          {
            "code" : "serf_fischer_medical_novae_stick",
            "display" : "Serf: Novae Stick"
          },
          {
            "code" : "serf_fischer_medical_novae_sunfit",
            "display" : "Serf: Novae Sunfit"
          },
          {
            "code" : "smith&nephew_bhr",
            "display" : "Smith & Nephew: BHR"
          },
          {
            "code" : "smith&nephew_polarcup",
            "display" : "Smith & Nephew: Polarcup"
          },
          {
            "code" : "smith&nephew_r3",
            "display" : "Smith & Nephew: R3"
          },
          {
            "code" : "stryker_contemporary",
            "display" : "Stryker: Contemporary"
          },
          {
            "code" : "stryker_exeter_rimfit_x3",
            "display" : "Stryker: Exeter Rimfit X3"
          },
          {
            "code" : "stryker_restoration_anatomical",
            "display" : "Stryker: Restoration Anatomical"
          },
          {
            "code" : "stryker_trident_ad_hemispheric",
            "display" : "Stryker: Trident AD hemisfærisk"
          },
          {
            "code" : "stryker_trident_ad_psl",
            "display" : "Stryker: Trident AD PSL"
          },
          {
            "code" : "stryker_trident_all_poly",
            "display" : "Stryker: Trident All Poly"
          },
          {
            "code" : "stryker_trident_ii",
            "display" : "Stryker: Trident II"
          },
          {
            "code" : "stryker_trident_ii_psl",
            "display" : "Stryker: Trident II PSL"
          },
          {
            "code" : "stryker_trident_ii_tritanium",
            "display" : "Stryker: Trident II Tritanium"
          },
          {
            "code" : "stryker_trident_tritanium_primary",
            "display" : "Stryker: Trident Tritanium primary"
          },
          {
            "code" : "stryker_trident_tritanium_revision",
            "display" : "Stryker: Trident Tritanium Revision"
          },
          {
            "code" : "zimmer_biomet_advantage",
            "display" : "Zimmer Biomet: Avantage"
          },
          {
            "code" : "zimmer_biomet_tmt_continuum",
            "display" : "Zimmer Biomet: Continuum"
          },
          {
            "code" : "zimmer_biomet_exceed_cemented_flanged_e1",
            "display" : "Zimmer Biomet: Exceed Cemented Flanged E1"
          },
          {
            "code" : "zimmer_biomet_exceed_cemented_muller_e1",
            "display" : "Zimmer Biomet: Exceed Cemented Muller E1"
          },
          {
            "code" : "zimmer_biomet_exceed_cemented_non_flanged_e1",
            "display" : "Zimmer Biomet: Exceed Cemented Non Flanged E1"
          },
          {
            "code" : "zimmer_biomet_g7_osseoti_coating",
            "display" : "Zimmer Biomet: G7 OsseoTi coating "
          },
          {
            "code" : "zimmer_biomet_g7_pps",
            "display" : "Zimmer Biomet: G7 PPS"
          },
          {
            "code" : "zimmer_biomet_mueller",
            "display" : "Zimmer Biomet: Müller"
          },
          {
            "code" : "zimmer_biomet_tmt_revision",
            "display" : "Zimmer Biomet: TMARS"
          },
          {
            "code" : "zimmer_biomet_tmt_modular_cup",
            "display" : "Zimmer Biomet: TMT Modular Cup"
          },
          {
            "code" : "zimmer_biomet_trilogy",
            "display" : "Zimmer Biomet: Trilogy"
          },
          {
            "code" : "zimmer_biomet_trilogy_it",
            "display" : "Zimmer Biomet: Trilogy IT"
          },
          {
            "code" : "zimmer_biomet_zca",
            "display" : "Zimmer Biomet: ZCA"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "custom",
            "display" : "Custom made"
          },
          {
            "code" : "other",
            "display" : "Anden komponent"
          }
        ]
      }
    ]
  }
}

```
