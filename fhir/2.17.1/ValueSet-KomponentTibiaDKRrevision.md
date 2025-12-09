# Komponent - tibia (DKR) revision - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komponent - tibia (DKR) revision**

## ValueSet: Komponent - tibia (DKR) revision (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomponentTibiaDKRrevision | *Version*:2.17.1 |
| Active as of 2025-03-04 | *Computable Name*:KomponentTibiaDKRrevision |

 
Komponent - tibia (DKR) revision 

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
  "id" : "KomponentTibiaDKRrevision",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomponentTibiaDKRrevision",
  "version" : "2.17.1",
  "name" : "KomponentTibiaDKRrevision",
  "title" : "Komponent - tibia (DKR) revision",
  "status" : "active",
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
  "description" : "Komponent - tibia (DKR) revision",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/KneeJointArthroplastyComponent",
        "concept" : [
          {
            "code" : "johnson&johnson_attune_fb",
            "display" : "Johnson & Johnson: Attune FB"
          },
          {
            "code" : "johnson&johnson_attune_fixed_crs",
            "display" : "Johnson & Johnson: Attune Fixed CRS (Constrained Revision System)"
          },
          {
            "code" : "johnson&johnson_attune_mbt_crs",
            "display" : "Johnson & Johnson: Attune Revision Tibial Base Rotating Platform"
          },
          {
            "code" : "johnson&johnson_attune_rotation_platfom",
            "display" : "Johnson & Johnson: Attune Rotation Platfom"
          },
          {
            "code" : "johnson&johnson_pfc_cruciate_substituting",
            "display" : "Johnson & Johnson: PFC Crusiate-Substituting"
          },
          {
            "code" : "johnson&johnson_pfc_modular",
            "display" : "Johnson & Johnson: PFC Modular"
          },
          {
            "code" : "johnson&johnson_pfc_sigma_all_poly",
            "display" : "Johnson & Johnson: PFC Sigma All-Poly"
          },
          {
            "code" : "johnson&johnson_pfc_sigma_cruciate_retaining",
            "display" : "Johnson & Johnson: PFC Sigma Cruciate-Retaining"
          },
          {
            "code" : "johnson&johnson_pfc_sigma_ps",
            "display" : "Johnson & Johnson: PFC Sigma PS"
          },
          {
            "code" : "johnson&johnson_pfc_sigma_revision_tc3",
            "display" : "Johnson & Johnson: PFC Sigma Revision and TC3"
          },
          {
            "code" : "johnson&johnson_pfc_sigma_rotating_platform",
            "display" : "Johnson & Johnson: PFC Sigma Rotating Platform"
          },
          {
            "code" : "johnson&johnson_pfc_sigma_rp_stabilized",
            "display" : "Johnson & Johnson: PFC Sigma RP Stabilized"
          },
          {
            "code" : "johnson&johnson_pfc_standard",
            "display" : "Johnson & Johnson: PFC Standard"
          },
          {
            "code" : "depuy_sigma_hp_partiel_knee",
            "display" : "Johnson & Johnson: DePuy Sigma HP partial knee"
          },
          {
            "code" : "sigma_hp_partiel_knee_modular",
            "display" : "Johnson & Johnson: Sigma HP Partial Knee modular"
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
            "display" : "LINK: Endo-Model Rotational"
          },
          {
            "code" : "link_endo_model_total_hinge",
            "display" : "LINK: Endo-Model Total Hinge"
          },
          {
            "code" : "link_tack_cementless",
            "display" : "LINK: TACK Cementless"
          },
          {
            "code" : "osteonics_7000_all_poly",
            "display" : "Osteonics: All Poly"
          },
          {
            "code" : "smith&nephew_genesis_all_poly",
            "display" : "Smith & Nephew: Genesis II All-Poly"
          },
          {
            "code" : "stryker_gmrs",
            "display" : "Stryker: GMRS"
          },
          {
            "code" : "stryker_modular_rotating_hinge",
            "display" : "Stryker: Modular Rotation Hinge"
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
            "code" : "stryker_scorpio_all_poly",
            "display" : "Stryker: Scorpio All Poly"
          },
          {
            "code" : "stryker_triathlon",
            "display" : "Stryker: Triathlon"
          },
          {
            "code" : "stryker_triathlon_all_poly",
            "display" : "Stryker: Triathlon All Poly"
          },
          {
            "code" : "stryker_thriathlon_pkr",
            "display" : "Stryker: Triathlon PKR"
          },
          {
            "code" : "stryker_thriathlon_ts",
            "display" : "Stryker: Triathlon TS"
          },
          {
            "code" : "stryker_triathlon_universal",
            "display" : "Stryker: Triathlon Universal"
          },
          {
            "code" : "biomet_agc_v2",
            "display" : "Zimmer Biomet: AGC V2"
          },
          {
            "code" : "biomet_tibia_offset_tray",
            "display" : "Zimmer Biomet: Tibia Offset Tray"
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
            "code" : "zimmer_nexgen_cr_modular_tmt",
            "display" : "Zimmer Biomet: NexGen CR modulær TMT"
          },
          {
            "code" : "zimmer_nexgen_cr_monoblock_tmt",
            "display" : "Zimmer Biomet: NexGen CR Munoblok, TMT"
          },
          {
            "code" : "zimmer_nexgen_lcck",
            "display" : "Zimmer Biomet: NexGen LCCK"
          },
          {
            "code" : "zimmer_nexgen_lps",
            "display" : "Zimmer Biomet: NexGen LPS"
          },
          {
            "code" : "zimmer_nexgen_lps_flex",
            "display" : "Zimmer Biomet: NexGen LPS Flex"
          },
          {
            "code" : "zimmer_nexgen_lps_modular_tmt",
            "display" : "Zimmer Biomet: NexGen LPS Modulær TMT"
          },
          {
            "code" : "zimmer_nexgen_lps_monoblock_tmt",
            "display" : "Zimmer Biomet: NexGen LPS Monoblok TMT"
          },
          {
            "code" : "zimmer_nexgen_rhk",
            "display" : "Zimmer Biomet: NexGen RHK"
          },
          {
            "code" : "nexgen_zuk",
            "display" : "Zimmer Biomet: NexGen Zuk"
          },
          {
            "code" : "biomet_oxford_domed_lateral_pkr",
            "display" : "Zimmer Biomet: Oxford domed lateral PKR"
          },
          {
            "code" : "zimmer_biomet_oxford_lateral_fixed_bearing",
            "display" : "Zimmer Biomet: Oxford Lateral Fixed Bearing"
          },
          {
            "code" : "oxford_phase_iii_alpha",
            "display" : "Zimmer Biomet: Oxford Phase III alpha"
          },
          {
            "code" : "persona_cr",
            "display" : "Zimmer Biomet: Persona CR"
          },
          {
            "code" : "persona_mc",
            "display" : "Zimmer Biomet: Persona MC"
          },
          {
            "code" : "persona_ps",
            "display" : "Zimmer Biomet: Persona PS"
          },
          {
            "code" : "persona_uc",
            "display" : "Zimmer Biomet: Persona UC"
          },
          {
            "code" : "persona_prk",
            "display" : "Zimmer Biomet: Persona Revision Knee"
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
            "code" : "biomet_vanguard_rocc_interlok_tibia",
            "display" : "Zimmer Biomet: Vanguard ROCC - Interlok Tibia"
          },
          {
            "code" : "biomet_vanguard_unicompartmental",
            "display" : "Zimmer Biomet: Vanguard Unicompartmental"
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
