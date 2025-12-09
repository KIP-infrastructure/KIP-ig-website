# Komponent - femur (DHR) - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komponent - femur (DHR)**

## ValueSet: Komponent - femur (DHR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomponentFemurDHR | *Version*:2.17.1 |
| Active as of 2022-11-16 | *Computable Name*:KomponentFemurDHR |

 
Komponent - femur (DHR) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

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
  "id" : "KomponentFemurDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomponentFemurDHR",
  "version" : "2.17.1",
  "name" : "KomponentFemurDHR",
  "title" : "Komponent - femur (DHR)",
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
  "description" : "Komponent - femur (DHR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HipJointArthroplastyComponent",
        "concept" : [
          {
            "code" : "depuy_corail_collar",
            "display" : "DePuy: Corail m/krave"
          },
          {
            "code" : "depuy_corail_without_collar",
            "display" : "DePuy: Corail u/krave"
          },
          {
            "code" : "depuy_corail_revision_stem",
            "display" : "DePuy: Corail Revision Stem - KAR"
          },
          {
            "code" : "depuy_c_stem_amt",
            "display" : "DePuy: C-stem AMT"
          },
          {
            "code" : "depuy_summit",
            "display" : "DePuy: Summit"
          },
          {
            "code" : "implantcast_mutars_proximal_femoral_replacement",
            "display" : "Implantcast: Mutars proksimal femoral replacement"
          },
          {
            "code" : "lima_h_max_lateralized",
            "display" : "Lima: H-MAX: Lateralized"
          },
          {
            "code" : "lima_h_max_standard",
            "display" : "Lima: H-MAX: Standard"
          },
          {
            "code" : "link_link_mp",
            "display" : "Link: Link MP"
          },
          {
            "code" : "link_lubinus_sp_ii",
            "display" : "Link: Lubinus SP II"
          },
          {
            "code" : "peter_brehm_gmbh_mrp_titan",
            "display" : "Peter Brehm GmbH: MRP-Titan"
          },
          {
            "code" : "smith&nephew_bhr",
            "display" : "Smith & Nephew: BHR"
          },
          {
            "code" : "smith&nephew_polarstem",
            "display" : "Smith & Nephew: Polarstem"
          },
          {
            "code" : "stryker_acolade_ii",
            "display" : "Stryker: Accolade II "
          },
          {
            "code" : "stryker_exeter_primary_v40",
            "display" : "Stryker: Exeter Primary V40"
          },
          {
            "code" : "stryker_gmrs_proximal_femoral_component",
            "display" : "Stryker: GMRS Proximal Femoral Component"
          },
          {
            "code" : "stryker_restoration_modular",
            "display" : "Stryker: Restoration modular"
          },
          {
            "code" : "viking_medical_cfp",
            "display" : "Viking Medical: C.F.P."
          },
          {
            "code" : "zimmer_biomet_arcos_revision",
            "display" : "Zimmer Biomet: Arcos revision"
          },
          {
            "code" : "zimmer_biomet_avenir_cemented_stem",
            "display" : "Zimmer Biomet: Avenir cemented stem"
          },
          {
            "code" : "zimmer_biomet_avenir_cementless_stem",
            "display" : "Zimmer Biomet: Avenir cementless stem "
          },
          {
            "code" : "zimmer_biomet_avenir_complete",
            "display" : "Zimmer Biomet: Avenir complete"
          },
          {
            "code" : "zimmer_biomet_bimetrix_without_collar_chrome_cobalt",
            "display" : "Zimmer Biomet: Bimetric u/krave chrom/cobolt"
          },
          {
            "code" : "zimmer_biomet_bimetric_without_collar_titaneum",
            "display" : "Zimmer Biomet: Bimetric u/krave titaneum"
          },
          {
            "code" : "zimmer_biomet_cls_spotorno",
            "display" : "Zimmer Biomet: CLS Spotorno"
          },
          {
            "code" : "zimmer_biomet_cpt",
            "display" : "Zimmer Biomet: CPT"
          },
          {
            "code" : "zimmer_biomet_echo_bi_metric_hip_stem_full_proximal_profile",
            "display" : "Zimmer Biomet: Echo Bi-metric Hip Stem Full Proximal Profile"
          },
          {
            "code" : "zimmer_biomet_echo_bi_metric_reduced_proximal_profile",
            "display" : "Zimmer Biomet: Echo Bi-Metric Reduceret Proximal Profil"
          },
          {
            "code" : "zimmer_biomet_fitmore",
            "display" : "Zimmer Biomet: Fitmore"
          },
          {
            "code" : "zimmer_biomet_ms_30",
            "display" : "Zimmer Biomet: MS-30"
          },
          {
            "code" : "zimmer_biomet_revitan_revision_hip_system",
            "display" : "Zimmer Biomet: Revitan Revision Hip System"
          },
          {
            "code" : "zimmer_biomet_taperloc",
            "display" : "Zimmer Biomet: Taperloc"
          },
          {
            "code" : "zimmer_biomet_wagner_cone",
            "display" : "Zimmer Biomet: Wagner Cone"
          },
          {
            "code" : "zimmer_biomet_wagner_sl",
            "display" : "Zimmer Biomet: Wagner SL"
          },
          {
            "code" : "zimmer_biomet_zmr_porous_coated",
            "display" : "Zimmer Biomet: ZMR porous-coated"
          },
          {
            "code" : "zimmer_biomet_zmr_splined",
            "display" : "Zimmer Biomet: ZMR splined"
          },
          {
            "code" : "zimmer_biomet_zmr_taper",
            "display" : "Zimmer Biomet: ZMR Taper"
          },
          {
            "code" : "zimmer_biomet_zmr_taper_xl",
            "display" : "Zimmer Biomet: ZMR Taper XL"
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
