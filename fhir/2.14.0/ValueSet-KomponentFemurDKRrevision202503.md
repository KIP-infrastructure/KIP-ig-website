# Komponent - femur (DKR) revision 2025 - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komponent - femur (DKR) revision 2025**

## ValueSet: Komponent - femur (DKR) revision 2025 (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomponentFemurDKRrevision202503 | *Version*:2.14.0 |
| Retired as of 2025-03-04 | *Computable Name*:KomponentFemurDKRrevision202503 |

 
Komponent - femur (DKR) revision - Rettelser 2025 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansions are not generated for retired value sets

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
  "id" : "KomponentFemurDKRrevision202503",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomponentFemurDKRrevision202503",
  "version" : "2.14.0",
  "name" : "KomponentFemurDKRrevision202503",
  "title" : "Komponent - femur (DKR) revision 2025",
  "status" : "retired",
  "experimental" : true,
  "date" : "2025-03-04T00:00:00+02:00",
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
  "description" : "Komponent - femur (DKR) revision - Rettelser 2025",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/KneeJointArthroplastyComponent",
        "concept" : [
          {
            "code" : "arthrosurface_hemicap",
            "display" : "Arthrosurface: HemiCAP"
          },
          {
            "code" : "arthrosurface_hemicap_pf",
            "display" : "Arthrosurface: Hemicap PF"
          },
          {
            "code" : "arthrosurface_unicap",
            "display" : "Arthrosurface: Unicap"
          },
          {
            "code" : "episealer_condyle_solo",
            "display" : "Episurf Medical: Episealer Condyle Solo"
          },
          {
            "code" : "depuy_attune_cr",
            "display" : "Johnson & Johnson: Attune CR"
          },
          {
            "code" : "johnson&johnson_attune_crs",
            "display" : "Johnson & Johnson: Attune CRS (Constrained Revision System)"
          },
          {
            "code" : "depuy_limb_preservation_system",
            "display" : "Johnson & Johnson: Limb Preservation System"
          },
          {
            "code" : "limb_preservation_system_distal_femur",
            "display" : "Johnson & Johnson: Limb Preservation System Distal Femur"
          },
          {
            "code" : "johnson&johnson_pfc_sigma_cruciate_retaining",
            "display" : "Johnson & Johnson: PFC Sigma Cruciate-Retaining"
          },
          {
            "code" : "johnson&johnson_pfc_sigma_cruciate_substituting",
            "display" : "Johnson & Johnson: PFC Sigma Cruciate-Substituting"
          },
          {
            "code" : "johnson&johnson_pfc_sigma_tc3",
            "display" : "Johnson & Johnson: PFC Sigma TC3 "
          },
          {
            "code" : "depuy_sigma_hp_partiel_knee",
            "display" : "Johnson & Johnson: Sigma HP Partial Knee"
          },
          {
            "code" : "johnson&johnson_s_rom_noiles",
            "display" : "Johnson & Johnson: S-ROM Noiles"
          },
          {
            "code" : "physica_cr",
            "display" : "Lima: Physica CR"
          },
          {
            "code" : "physica_kr",
            "display" : "Lima: Physica KR"
          },
          {
            "code" : "physica_ps",
            "display" : "Lima: Physica PS"
          },
          {
            "code" : "link_endo_model_rotational",
            "display" : "Link: Endo-Model Rotational"
          },
          {
            "code" : "link_endo_model_total_hinge",
            "display" : "Link: Endo-Model Total Hinge"
          },
          {
            "code" : "megasystem_c",
            "display" : "Link: Megasystem C"
          },
          {
            "code" : "link_st_georg",
            "display" : "Link: St. Georg "
          },
          {
            "code" : "smith&nephew_competitor_pfj",
            "display" : "Smith & Nephew: Competitor PFJ"
          },
          {
            "code" : "smith&nephew_genesis_cruciate_retaining",
            "display" : "Smith & Nephew: Genesis Cruciate-Retaining"
          },
          {
            "code" : "smith&nephew_genesis_legion_cr_oxinium",
            "display" : "Smith & Nephew: Legion CR Oxinium "
          },
          {
            "code" : "smith&nephew_genesis_profix_posterior_stabilized",
            "display" : "Smith & Nephew: Profix Posterior Stabilized"
          },
          {
            "code" : "smith&nephew_genesis_profix_revision",
            "display" : "Smith & Nephew: Profix Revision"
          },
          {
            "code" : "stryker_howmetica_avon",
            "display" : "Stryker/Howmetica: Avon"
          },
          {
            "code" : "stryker_gmrs",
            "display" : "Stryker: GMRS"
          },
          {
            "code" : "stryker_modular_rotating_hinge",
            "display" : "Stryker: Modular Rotating Hinge "
          },
          {
            "code" : "stryker_restoris_pfa",
            "display" : "Stryker: Restoris PFA"
          },
          {
            "code" : "stryker_restoris_medial_uni",
            "display" : "Stryker: Restoris Medial Uni"
          },
          {
            "code" : "stryker_restoris_lateral_uni",
            "display" : "Stryker: Restoris Lateral Uni"
          },
          {
            "code" : "stryker_scorpio_cr",
            "display" : "Stryker: Scorpio CR"
          },
          {
            "code" : "stryker_scorpio_ps",
            "display" : "Stryker: Scorpio PS"
          },
          {
            "code" : "stryker_scorpio_ts",
            "display" : "Stryker: Scorpio TS"
          },
          {
            "code" : "stryker_triathlon_cr",
            "display" : "Stryker: Triathlon CR"
          },
          {
            "code" : "stryker_thriathlon_pkr",
            "display" : "Stryker: Triathlon PKR"
          },
          {
            "code" : "stryker_thriathlon_ps",
            "display" : "Stryker: Triathlon PS "
          },
          {
            "code" : "stryker_thriathlon_ts",
            "display" : "Stryker: Triathlon TS"
          },
          {
            "code" : "vanguard_da_360",
            "display" : "Vanguard: DA 360"
          },
          {
            "code" : "biomet_agc_v2_universal",
            "display" : "Zimmer Biomet: AGC V2 Universal"
          },
          {
            "code" : "zimmer_nexgen_cr",
            "display" : "Zimmer Biomet: NexGen CR"
          },
          {
            "code" : "zimmer_nexgen_cr_flex",
            "display" : "Zimmer Biomet: NexGen CR Flex"
          },
          {
            "code" : "zimmer_nexgen_cr_flex_gender",
            "display" : "Zimmer Biomet: NexGen CR Flex Gender"
          },
          {
            "code" : "zimmer_nexgen_lcck",
            "display" : "Zimmer Biomet: NexGen LCCK"
          },
          {
            "code" : "zimmer_nexgen_lps",
            "display" : "Zimmer Biomet: NexGen LPS "
          },
          {
            "code" : "zimmer_nexgen_lps_flex",
            "display" : "Zimmer Biomet: NexGen LPS-Flex"
          },
          {
            "code" : "zimmer_nexgen_rhk",
            "display" : "Zimmer Biomet: NexGen RHK "
          },
          {
            "code" : "nexgen_zuk",
            "display" : "Zimmer Biomet: NexGen Zuk"
          },
          {
            "code" : "oxford_2_peg",
            "display" : "Zimmer Biomet: Oxford 2-peg"
          },
          {
            "code" : "oxford_domed_lateral_pkr",
            "display" : "Zimmer Biomet: Oxford domed lateral PKR"
          },
          {
            "code" : "biomet_oxford_phase_iii_alpha",
            "display" : "Zimmer Biomet: Oxford Phase III alpha"
          },
          {
            "code" : "persona_cr",
            "display" : "Zimmer Biomet: Persona CR"
          },
          {
            "code" : "persona_ps",
            "display" : "Zimmer Biomet: Persona PS"
          },
          {
            "code" : "persona_ppk",
            "display" : "Zimmer Biomet: Persona Partial Knee"
          },
          {
            "code" : "zimmer_nexgen_pfj",
            "display" : "Zimmer Biomet: PFJ"
          },
          {
            "code" : "biomet_rhk_rotating_hinge_knee",
            "display" : "Zimmer Biomet: RHK Rotating Hinge Knee"
          },
          {
            "code" : "biomet_vanguard_cr",
            "display" : "Zimmer Biomet: Vanguard CR"
          },
          {
            "code" : "biomet_vanguard_rocc_interlok_femur",
            "display" : "Zimmer Biomet: Vanguard ROCC - Interlok Femur"
          },
          {
            "code" : "biomet_vanguard_ssk",
            "display" : "Zimmer Biomet: Vanguard SSK 360"
          },
          {
            "code" : "zimmer_segmental_system",
            "display" : "Zimmer Biomet: Zimmer Segmental System"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AlloplastyTypes",
        "concept" : [
          {
            "code" : "spacer_insertion",
            "display" : "Fjernelse af komponent og isættelse af spacer"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "not_replaced",
            "display" : "Ikke udskiftet (ved revision)"
          },
          {
            "code" : "other",
            "display" : "Andet"
          }
        ]
      }
    ]
  }
}

```
