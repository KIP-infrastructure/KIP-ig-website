# Knee joint arthroplasty - components - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Knee joint arthroplasty - components**

## CodeSystem: Knee joint arthroplasty - components 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/KneeJointArthroplastyComponent | *Version*:2.15.0 |
| Active as of 2025-03-04 | *Computable Name*:KneeJointArthroplastyComponent |

 
Knee joint arthroplasty - components 

 This Code system is referenced in the content logical definition of the following value sets: 

* [KomponentFemurDKR](ValueSet-KomponentFemurDKR.md)
* [KomponentFemurDKR202503](ValueSet-KomponentFemurDKR202503.md)
* [KomponentFemurDKRrevision](ValueSet-KomponentFemurDKRrevision.md)
* [KomponentFemurDKRrevision202503](ValueSet-KomponentFemurDKRrevision202503.md)
* [KomponentTibiaDKR](ValueSet-KomponentTibiaDKR.md)
* [KomponentTibiaDKR202503](ValueSet-KomponentTibiaDKR202503.md)
* [KomponentTibiaDKRrevision](ValueSet-KomponentTibiaDKRrevision.md)
* [KomponentTibiaDKRrevision202503](ValueSet-KomponentTibiaDKRrevision202503.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "KneeJointArthroplastyComponent",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/KneeJointArthroplastyComponent",
  "version" : "2.15.0",
  "name" : "KneeJointArthroplastyComponent",
  "title" : "Knee joint arthroplasty - components",
  "status" : "active",
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
  "description" : "Knee joint arthroplasty - components",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 174,
  "property" : [
    {
      "code" : "comment",
      "uri" : "http://hl7.org/fhir/concept-properties#comment",
      "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
      "type" : "string"
    },
    {
      "code" : "effectiveDate",
      "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
      "description" : "The date at which the concept status was last changed",
      "type" : "dateTime"
    },
    {
      "code" : "status",
      "uri" : "http://hl7.org/fhir/concept-properties#status",
      "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
      "type" : "code"
    },
    {
      "code" : "inactive",
      "uri" : "http://hl7.org/fhir/concept-properties#inactive",
      "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
      "type" : "boolean"
    }
  ],
  "concept" : [
    {
      "code" : "arthrosurface_hemicap",
      "display" : "Arthrosurface: HemiCAP",
      "definition" : "Arthrosurface: HemiCAP (Femur)"
    },
    {
      "code" : "arthrosurface_hemicap_pf",
      "display" : "Arthrosurface: Hemicap PF",
      "definition" : "Arthrosurface: Hemicap PF (Femur)"
    },
    {
      "code" : "arthrosurface_unicap",
      "display" : "Arthrosurface: Unicap",
      "definition" : "Arthrosurface: Unicap (Femur + Tibia)"
    },
    {
      "code" : "biomet_agc_hp_posterior_stabilizer",
      "display" : "Biomet: AGC HP Posterior Stabilizer",
      "definition" : "Biomet: AGC HP Posterior Stabilizer (Femur)"
    },
    {
      "code" : "biomet_agc_v2",
      "display" : "Zimmer Biomet: AGC V2",
      "definition" : "Zimmer Biomet: AGC V2 (Tibia)"
    },
    {
      "code" : "biomet_agc_v2_universal",
      "display" : "Zimmer Biomet: AGC V2 Universal",
      "definition" : "Zimmer Biomet: AGC V2 Universal (Femur)"
    },
    {
      "code" : "biomet_maxim",
      "display" : "Biomet: Maxim",
      "definition" : "Biomet: Maxim (Tibia)"
    },
    {
      "code" : "biomet_maxim_constrained",
      "display" : "Biomet: Maxim Constrained",
      "definition" : "Biomet: Maxim Constrained (Femur)"
    },
    {
      "code" : "biomet_maxim_posterior_stabilized",
      "display" : "Biomet: Maxim Posterior Stabilized",
      "definition" : "Biomet: Maxim Posterior Stabilized (Femur)"
    },
    {
      "code" : "biomet_oxford_domed_lateral_pkr",
      "display" : "Zimmer Biomet: Oxford domed lateral PKR",
      "definition" : "Zimmer Biomet: Oxford domed lateral PKR (Tibia)"
    },
    {
      "code" : "biomet_oxford_phase_iii_alpha",
      "display" : "Zimmer Biomet: Oxford Phase III alpha",
      "definition" : "Zimmer Biomet: Oxford Phase III alpha (Femur)"
    },
    {
      "code" : "biomet_rhk_rotating_hinge_knee",
      "display" : "Zimmer Biomet: RHK Rotating Hinge Knee",
      "definition" : "Zimmer Biomet: RHK Rotating Hinge Knee (Femur + Tibia)"
    },
    {
      "code" : "biomet_tibia_offset_tray",
      "display" : "Biomet: Tibia Offset Tray",
      "definition" : "Biomet: Tibia Offset Tray (Tibia)"
    },
    {
      "code" : "biomet_vanguard_cr",
      "display" : "Zimmer Biomet: Vanguard CR",
      "definition" : "Zimmer Biomet: Vanguard CR (Femur + Tibia)"
    },
    {
      "code" : "biomet_vanguard_m_unicompartmental",
      "display" : "Biomet: Vanguard M Unicompartmental",
      "definition" : "Biomet: Vanguard M Unicompartmental (Femur)"
    },
    {
      "code" : "biomet_vanguard_pfr",
      "display" : "Biomet: Vanguard PFR",
      "definition" : "Biomet: Vanguard PFR (Femur)"
    },
    {
      "code" : "biomet_vanguard_ps",
      "display" : "Biomet: Vanguard PS",
      "definition" : "Biomet: Vanguard PS (Femur + Tibia)"
    },
    {
      "code" : "biomet_vanguard_rocc_interlok_femur",
      "display" : "Biomet: Vanguard ROCC - Interlok Femur",
      "definition" : "Biomet: Vanguard ROCC - Interlok Femur (Femur)"
    },
    {
      "code" : "biomet_vanguard_rocc_interlok_tibia",
      "display" : "Zimmer Biomet: Vanguard ROCC - Interlok Tibia",
      "definition" : "Zimmer Biomet: Vanguard ROCC - Interlok Tibia (Tibia)"
    },
    {
      "code" : "biomet_vanguard_rocc_interlok_tibia_pps_ha",
      "display" : "Biomet: Vanguard ROCC - Tibia PPS + HA",
      "definition" : "Biomet: Vanguard ROCC - Tibia PPS + HA (Tibia)"
    },
    {
      "code" : "biomet_vanguard_ssk",
      "display" : "Biomet: Vanguard SSK",
      "definition" : "Biomet: Vanguard SSK (Femur)"
    },
    {
      "code" : "biomet_vanguard_unicompartmental",
      "display" : "Zimmer Biomet: Vanguard Unicompartmental",
      "definition" : "Zimmer Biomet: Vanguard Unicompartmental (Tibia)"
    },
    {
      "code" : "corin_rotaglide",
      "display" : "Corin: Rotaglide",
      "definition" : "Corin: Rotaglide (Tibia)"
    },
    {
      "code" : "corin_rotaglide_pegged",
      "display" : "Corin: Rotaglide Pegged",
      "definition" : "Corin: Rotaglide Pegged (Femur)"
    },
    {
      "code" : "corin_rotaglide_posterior_stabilizer",
      "display" : "Corin: Rotaglide Posterior Stabilizer",
      "definition" : "Corin: Rotaglide Posterior Stabilizer (Femur)"
    },
    {
      "code" : "corin_rotaglide_stemless",
      "display" : "Corin: Rotaglide Stemless",
      "definition" : "Corin: Rotaglide Stemless (Femur)"
    },
    {
      "code" : "corin_rotaglide_stemmed",
      "display" : "Corin: Rotaglide Stemmed",
      "definition" : "Corin: Rotaglide Stemmed (Femur)"
    },
    {
      "code" : "depuy_attune_cr",
      "display" : "Johnson & Johnson: Attune CR",
      "definition" : "Johnson & Johnson: Attune CR (Femur)"
    },
    {
      "code" : "depuy_limb_preservation_system",
      "display" : "Johnson & Johnson: Limb Preservation System",
      "definition" : "Johnson & Johnson: Limb Preservation System (Femur)"
    },
    {
      "code" : "depuy_sigma_hp_partiel_knee",
      "display" : "DePuy: Sigma HP partial knee",
      "definition" : "DePuy: Sigma HP partial knee (Femur + Tibia)"
    },
    {
      "code" : "episealer_condyle_solo",
      "display" : "Episurf Medical: Episealer Condyle Solo",
      "definition" : "Episurf Medical: Episealer Condyle Solo (Femur)"
    },
    {
      "code" : "howmedica_duracon_all_plastic",
      "display" : "Howmedica: Duracon All-Plastic",
      "definition" : "Howmedica: Duracon All-Plastic (Tibia)"
    },
    {
      "code" : "howmedica_duracon_cruciform",
      "display" : "Howmedica: Duracon Cruciform",
      "definition" : "Howmedica: Duracon Cruciform (Tibia)"
    },
    {
      "code" : "howmedica_duracon_modular",
      "display" : "Howmedica: Duracon Modular",
      "definition" : "Howmedica: Duracon Modular (Femur)"
    },
    {
      "code" : "howmedica_duracon_standard",
      "display" : "Howmedica: Duracon Standard",
      "definition" : "Howmedica: Duracon Standard (Femur)"
    },
    {
      "code" : "howmedica_duracon_stemmed_stabilizer",
      "display" : "Howmedica: Duracon Stemmed Stabilizer",
      "definition" : "Howmedica: Duracon Stemmed Stabilizer (Femur)"
    },
    {
      "code" : "howmedica_duracon_universal",
      "display" : "Howmedica: Duracon Universal",
      "definition" : "Howmedica: Duracon Universal (Tibia)"
    },
    {
      "code" : "howmedica_interax",
      "display" : "Howmedica: Interax",
      "definition" : "Howmedica: Interax (Tibia)"
    },
    {
      "code" : "howmedica_interax_stabilizer",
      "display" : "Howmedica: Interax Stabiliser",
      "definition" : "Howmedica: Interax Stabiliser (Femur)"
    },
    {
      "code" : "howmedica_interax_standard",
      "display" : "Howmedica: Interax Standard",
      "definition" : "Howmedica: Interax Standard (Femur)"
    },
    {
      "code" : "howmedica_kinemax_plus_stabilizer",
      "display" : "Howmedica: Kinemax Plus Stabilizer",
      "definition" : "Howmedica: Kinemax Plus Stabilizer (Femur)"
    },
    {
      "code" : "howmedica_kinemax_plus_standard",
      "display" : "Howmedica: Kinemax Plus Standard",
      "definition" : "Howmedica: Kinemax Plus Standard (Femur + Tibia)"
    },
    {
      "code" : "howmedica_kinemax_plus_superstabilizer",
      "display" : "Howmedica: Kinemax Plus Superstabilizer",
      "definition" : "Howmedica: Kinemax Plus Superstabilizer (Femur + Tibia)"
    },
    {
      "code" : "implex_cks_all_poly",
      "display" : "Implex: CKS All Poly",
      "definition" : "Implex: CKS All Poly (Tibia)"
    },
    {
      "code" : "implex_cks_continuum_posterior_stabilized",
      "display" : "Implex: CKS Continuum Posterior Stabilized",
      "definition" : "Implex: CKS Continuum Posterior Stabilized (Femur)"
    },
    {
      "code" : "implex_cks_modular",
      "display" : "Implex: CKS Modular",
      "definition" : "Implex: CKS Modular (Tibia)"
    },
    {
      "code" : "implex_cks_primary",
      "display" : "Implex: CKS Primary",
      "definition" : "Implex: CKS Primary (Femur)"
    },
    {
      "code" : "insall_burstein",
      "display" : "Insall-Burstein",
      "definition" : "Insall-Burstein (Tibia)"
    },
    {
      "code" : "johnson&johnson_attune_crs",
      "display" : "Johnson & Johnson: Attune CRS (Constrained Revision System)",
      "definition" : "Johnson & Johnson: Attune CRS (Constrained Revision System) (Femur)"
    },
    {
      "code" : "johnson&johnson_attune_fb",
      "display" : "Johnson & Johnson: Attune FB",
      "definition" : "Johnson & Johnson: Attune FB (Tibia)"
    },
    {
      "code" : "johnson&johnson_attune_fixed_crs",
      "display" : "Johnson & Johnson: Attune Fixed CRS (Constrained Revision System)",
      "definition" : "Johnson & Johnson: Attune Fixed CRS (Constrained Revision System) (Tibia)"
    },
    {
      "code" : "johnson&johnson_attune_mbt_crs",
      "display" : "Johnson & Johnson: Attune Revision Tibial Base Rotating Platform",
      "definition" : "Johnson & Johnson: Attune Revision Tibial Base Rotating Platform (Tibia)"
    },
    {
      "code" : "johnson&johnson_attune_rotation_platfom",
      "display" : "Johnson & Johnson: Attune Rotation Platfom",
      "definition" : "Johnson & Johnson: Attune Rotation Platfom (Tibia)"
    },
    {
      "code" : "johnson&johnson_pfc_cruciate_substituting",
      "display" : "Johnson & Johnson: PFC Crusiate-Substituting",
      "definition" : "Johnson & Johnson: PFC Crusiate-Substituting (Tibia)"
    },
    {
      "code" : "johnson&johnson_pfc_modular",
      "display" : "Johnson & Johnson: PFC Modular",
      "definition" : "Johnson & Johnson: PFC Modular (Tibia)"
    },
    {
      "code" : "johnson&johnson_pfc_sigma_all_poly",
      "display" : "Johnson & Johnson: PFC Sigma All-Poly",
      "definition" : "Johnson & Johnson: PFC Sigma All-Poly (Tibia)"
    },
    {
      "code" : "johnson&johnson_pfc_sigma_cruciate_retaining",
      "display" : "Johnson & Johnson: PFC Sigma Cruciate-Retaining",
      "definition" : "Johnson & Johnson: PFC Sigma Cruciate-Retaining (Femur + Tibia)"
    },
    {
      "code" : "johnson&johnson_pfc_sigma_cruciate_substituting",
      "display" : "Johnson & Johnson: PFC Sigma Cruciate-Substituting",
      "definition" : "Johnson & Johnson: PFC Sigma Cruciate-Substituting (Femur)"
    },
    {
      "code" : "johnson&johnson_pfc_sigma_ps",
      "display" : "Johnson & Johnson: PFC Sigma PS",
      "definition" : "Johnson & Johnson: PFC Sigma PS (Tibia)"
    },
    {
      "code" : "johnson&johnson_pfc_sigma_revision_tc3",
      "display" : "Johnson & Johnson: PFC Sigma Revision and TC3",
      "definition" : "Johnson & Johnson: PFC Sigma Revision and TC3 (Tibia)"
    },
    {
      "code" : "johnson&johnson_pfc_sigma_tc3",
      "display" : "Johnson & Johnson: PFC Sigma TC3",
      "definition" : "Johnson & Johnson: PFC Sigma TC3 (Femur)"
    },
    {
      "code" : "johnson&johnson_pfc_sigma_rotating_platform",
      "display" : "Johnson & Johnson: PFC Sigma Rotating Platform",
      "definition" : "Johnson & Johnson: PFC Sigma Rotating Platform (Tibia)"
    },
    {
      "code" : "johnson&johnson_pfc_sigma_rp_stabilized",
      "display" : "Johnson & Johnson: PFC Sigma RP Stabilized",
      "definition" : "Johnson & Johnson: PFC Sigma RP Stabilized (Tibia)"
    },
    {
      "code" : "johnson&johnson_pfc_standard",
      "display" : "Johnson & Johnson: PFC Standard",
      "definition" : "Johnson & Johnson: PFC Standard (Tibia)"
    },
    {
      "code" : "johnson&johnson_preservation_uni_all_poly",
      "display" : "Johnson & Johnson: Preservation uni all poly",
      "definition" : "Johnson & Johnson: Preservation uni all poly (Tibia)"
    },
    {
      "code" : "johnson&johnson_preservation_uni_tray",
      "display" : "Johnson & Johnson: Preservation uni tray",
      "definition" : "Johnson & Johnson: Preservation uni tray (Tibia)"
    },
    {
      "code" : "johnson&johnson_s_rom_noiles",
      "display" : "Johnson & Johnson: S-ROM Noiles",
      "definition" : "Johnson & Johnson: S-ROM Noiles (Femur + Tibia)"
    },
    {
      "code" : "legion_oxinium_cr",
      "display" : "Legion: Oxinium CR",
      "definition" : "Legion: Oxinium CR (Femur)"
    },
    {
      "code" : "limb_preservation_system_distal_femur",
      "display" : "Limb Preservation System Distal Femur",
      "definition" : "Limb Preservation System Distal Femur (Femur)"
    },
    {
      "code" : "link_endo_model_rotational",
      "display" : "LINK: Endo-Model Rotational",
      "definition" : "LINK: Endo-Model Rotational (Femur + Tibia)"
    },
    {
      "code" : "link_endo_model_sled_hemi",
      "display" : "LINK: Endo-Model Sled Hemi",
      "definition" : "LINK: Endo-Model Sled Hemi (Femur + Tibia)"
    },
    {
      "code" : "link_endo_model_total_hinge",
      "display" : "LINK: Endo-Model Total Hinge",
      "definition" : "LINK: Endo-Model Total Hinge (Femur + Tibia)"
    },
    {
      "code" : "link_lubinus_patella_femoral",
      "display" : "LINK: Lubinus Patella-Femoral",
      "definition" : "LINK: Lubinus Patella-Femoral (Femur + Tibia)"
    },
    {
      "code" : "link_st_georg",
      "display" : "LINK: St. Georg",
      "definition" : "LINK: St. Georg (Femur + Tibia)"
    },
    {
      "code" : "link_tack_cementless",
      "display" : "LINK: TACK Cementless",
      "definition" : "LINK: TACK Cementless (Femur + Tibia)"
    },
    {
      "code" : "maxim_constrained",
      "display" : "Maxim Constrained",
      "definition" : "Maxim Constrained (Tibia)"
    },
    {
      "code" : "maxim_ps",
      "display" : "Maxim PS",
      "definition" : "Maxim PS (Tibia)"
    },
    {
      "code" : "megasystem_c",
      "display" : "LINK: Megasystem C",
      "definition" : "LINK: Megasystem C (Femur + Tibia)"
    },
    {
      "code" : "nexgen_zuk",
      "display" : "Zimmer Biomet: NexGen Zuk",
      "definition" : "Zimmer Biomet: NexGen Zuk (Femur + Tibia)"
    },
    {
      "code" : "osteonics_7000_all_poly",
      "display" : "Osteonics: All Poly",
      "definition" : "Osteonics: All Poly (Tibia)"
    },
    {
      "code" : "osteonics_7000_modular",
      "display" : "Osteonics: 7000 Modular",
      "definition" : "Osteonics: 7000 Modular (Femur + Tibia)"
    },
    {
      "code" : "osteonics_7000_posterior_stabilized",
      "display" : "Osteonics: 7000 Posterior Stabilized",
      "definition" : "Osteonics: 7000 Posterior Stabilized (Femur)"
    },
    {
      "code" : "osteonics_7000_standard",
      "display" : "Osteonics: 7000 Standard",
      "definition" : "Osteonics: 7000 Standard (Femur + Tibia)"
    },
    {
      "code" : "oxford_domed_lateral_pkr",
      "display" : "Zimmer Biomet: Oxford domed lateral PKR",
      "definition" : "Zimmer Biomet: Oxford domed lateral PKR (Femur)"
    },
    {
      "code" : "oxford_phase_iii_alpha",
      "display" : "Zimmer Biomet: Oxford Phase III alpha",
      "definition" : "Zimmer Biomet: Oxford Phase III alpha (Tibia)"
    },
    {
      "code" : "oxford_2_peg",
      "display" : "Zimmer Biomet: Oxford 2-peg",
      "definition" : "Zimmer Biomet: Oxford 2-peg (Femur)"
    },
    {
      "code" : "persona_cr",
      "display" : "Zimmer Biomet: Persona CR",
      "definition" : "Zimmer Biomet: Persona CR (Femur + Tibia)"
    },
    {
      "code" : "persona_mc",
      "display" : "Zimmer Biomet: Persona MC",
      "definition" : "Zimmer Biomet: Persona MC (Tibia)"
    },
    {
      "code" : "persona_ps",
      "display" : "Zimmer Biomet: Persona PS",
      "definition" : "Zimmer Biomet: Persona PS (Femur + Tibia)"
    },
    {
      "code" : "persona_uc",
      "display" : "Zimmer Biomet: Persona UC",
      "definition" : "Zimmer Biomet: Persona UC (Tibia)"
    },
    {
      "code" : "persona_ppk",
      "display" : "Zimmer Biomet: Persona Partial Knee",
      "definition" : "Zimmer Biomet: Persona Partial Knee",
      "property" : [
        {
          "code" : "comment",
          "valueString" : "Added"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "2025-04-03T00:00:00+01:00"
        },
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "inactive",
          "valueBoolean" : false
        }
      ]
    },
    {
      "code" : "persona_prk",
      "display" : "Zimmer Biomet: Persona Revision Knee",
      "definition" : "Zimmer Biomet: Persona Revision Knee",
      "property" : [
        {
          "code" : "comment",
          "valueString" : "Added"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "2025-05-30T00:00:00+01:00"
        },
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "inactive",
          "valueBoolean" : false
        }
      ]
    },
    {
      "code" : "pfc_sigma_offset_tibial_tray",
      "display" : "PFC Sigma Offset Tibial Tray",
      "definition" : "PFC Sigma Offset Tibial Tray (Tibia)"
    },
    {
      "code" : "physica_cr",
      "display" : "Lima: Physica CR",
      "definition" : "Lima: Physica CR (Femur + Tibia)"
    },
    {
      "code" : "physica_kr",
      "display" : "Lima: Physica KR",
      "definition" : "Lima: Physica KR (Femur + Tibia)"
    },
    {
      "code" : "physica_ps",
      "display" : "Lima: Physica PS",
      "definition" : "Lima: Physica PS (Femur + Tibia)"
    },
    {
      "code" : "preservation",
      "display" : "Preservation",
      "definition" : "Preservation (Femur + Tibia)"
    },
    {
      "code" : "sigma_hp_partiel_knee",
      "display" : "Johnson & Johnson: Sigma HP Partial Knee",
      "definition" : "Johnson & Johnson: Sigma HP Partial Knee (Femur)"
    },
    {
      "code" : "sigma_hp_partiel_knee_all_poly",
      "display" : "Sigma HP Partial Knee all-poly",
      "definition" : "Sigma HP Partial Knee all-poly (Tibia)"
    },
    {
      "code" : "sigma_hp_partiel_knee_modular",
      "display" : "Johnson & Johnson: Sigma HP Partial Knee modular",
      "definition" : "Johnson & Johnson: Sigma HP Partial Knee modular (Tibia)"
    },
    {
      "code" : "smith&nephew_competitor_pfj",
      "display" : "Smith & Nephew: Competitor PFJ",
      "definition" : "Smith & Nephew: Competitor PFJ (Femur)"
    },
    {
      "code" : "smith&nephew_genesis",
      "display" : "Smith & Nephew: Genesis",
      "definition" : "Smith & Nephew: Genesis (Tibia)"
    },
    {
      "code" : "smith&nephew_genesis_all_poly",
      "display" : "Smith & Nephew: Genesis All-Poly",
      "definition" : "Smith & Nephew: Genesis All-Poly (Tibia)"
    },
    {
      "code" : "smith&nephew_genesis_cruciate_retaining",
      "display" : "Smith & Nephew: Genesis Cruciate-Retaining",
      "definition" : "Smith & Nephew: Genesis Cruciate-Retaining (Femur)"
    },
    {
      "code" : "smith&nephew_genesis_ii",
      "display" : "Smith & Nephew: Genesis II",
      "definition" : "Smith & Nephew: Genesis II (Tibia)"
    },
    {
      "code" : "smith&nephew_genesis_ii_all_poly",
      "display" : "Smith & Nephew: Genesis II All-Poly",
      "definition" : "Smith & Nephew: Genesis II All-Poly (Tibia)"
    },
    {
      "code" : "smith&nephew_genesis_ii_cruciate_retaining",
      "display" : "Smith & Nephew: Genesis II Cruciate Retaining",
      "definition" : "Smith & Nephew: Genesis II Cruciate Retaining (Femur)"
    },
    {
      "code" : "smith&nephew_genesis_ii_long_stem_taper",
      "display" : "Smith & Nephew: Genesis II Long Stem Taper",
      "definition" : "Smith & Nephew: Genesis II Long Stem Taper (Femur)"
    },
    {
      "code" : "smith&nephew_genesis_ii_posterior_stabilized",
      "display" : "Smith & Nephew: Genesis II Posterior Stabilized",
      "definition" : "Smith & Nephew: Genesis II Posterior Stabilized (Femur)"
    },
    {
      "code" : "smith&nephew_genesis_ii_ps_taper",
      "display" : "Smith & Nephew: Genesis II PS Taper",
      "definition" : "Smith & Nephew: Genesis II PS Taper (Femur)"
    },
    {
      "code" : "smith&nephew_genesis_ii_revision",
      "display" : "Smith & Nephew: Genesis II Revision",
      "definition" : "Smith & Nephew: Genesis II Revision (Femur + Tibia)"
    },
    {
      "code" : "smith&nephew_genesis_long_stem_taper",
      "display" : "Smith & Nephew: Genesis Long Stem Taper",
      "definition" : "Smith & Nephew: Genesis Long Stem Taper (Femur)"
    },
    {
      "code" : "smith&nephew_genesis_posterior_stabilized",
      "display" : "Smith & Nephew: Genesis Posterior Stabilized",
      "definition" : "Smith & Nephew: Genesis Posterior Stabilized (Femur)"
    },
    {
      "code" : "smith&nephew_genesis_ps_taper",
      "display" : "Smith & Nephew: Genesis PS Taper",
      "definition" : "Smith & Nephew: Genesis PS Taper (Femur)"
    },
    {
      "code" : "smith&nephew_genesis_revision",
      "display" : "Smith & Nephew: Genesis Revision",
      "definition" : "Smith & Nephew: Genesis Revision (Femur + Tibia)"
    },
    {
      "code" : "smith&nephew_genesis_genesis_uni",
      "display" : "Smith & Nephew: Genesis Uni",
      "definition" : "Smith & Nephew: Genesis Uni (Femur + Tibia)"
    },
    {
      "code" : "smith&nephew_genesis_journey_pfj",
      "display" : "Smith & Nephew: Journey PFJ",
      "definition" : "Smith & Nephew: Journey PFJ (Femur)"
    },
    {
      "code" : "smith&nephew_genesis_legion_cr_oxinium",
      "display" : "Smith & Nephew: Legion CR Oxinium",
      "definition" : "Smith & Nephew: Legion CR Oxinium (Femur)"
    },
    {
      "code" : "smith&nephew_genesis_patella_mod_iii_cartier",
      "display" : "Smith & Nephew: Patella Mod III Cartier",
      "definition" : "Smith & Nephew: Patella Mod III Cartier (Femur)"
    },
    {
      "code" : "smith&nephew_genesis_profix",
      "display" : "Smith & Nephew: Profix",
      "definition" : "Smith & Nephew: Profix (Femur + Tibia)"
    },
    {
      "code" : "smith&nephew_genesis_profix_all_poly",
      "display" : "Smith & Nephew: Profix All-Poly",
      "definition" : "Smith & Nephew: Profix All-Poly (Tibia)"
    },
    {
      "code" : "smith&nephew_genesis_profix_cruciate_retaining",
      "display" : "Smith & Nephew: Profix Cruciate Retaining",
      "definition" : "Smith & Nephew: Profix Cruciate Retaining (Femur)"
    },
    {
      "code" : "smith&nephew_genesis_profix_long_stem_taper",
      "display" : "Smith & Nephew: Profix Long Stem Taper",
      "definition" : "Smith & Nephew: Profix Long Stem Taper (Femur)"
    },
    {
      "code" : "smith&nephew_genesis_profix_posterior_stabilized",
      "display" : "Smith & Nephew: Profix Posterior Stabilized",
      "definition" : "Smith & Nephew: Profix Posterior Stabilized (Femur)"
    },
    {
      "code" : "smith&nephew_genesis_profix_ps_taper",
      "display" : "Smith & Nephew: Profix PS Taper",
      "definition" : "Smith & Nephew: Profix PS Taper (Femur)"
    },
    {
      "code" : "smith&nephew_genesis_profix_revision",
      "display" : "Smith & Nephew: Profix Revision",
      "definition" : "Smith & Nephew: Profix Revision (Femur + Tibia)"
    },
    {
      "code" : "stryker_howmetica_avon",
      "display" : "Stryker/Howmetica: Avon",
      "definition" : "Stryker/Howmetica: Avon (Femur)"
    },
    {
      "code" : "stryker_gmrs",
      "display" : "Stryker: GMRS",
      "definition" : "Stryker: GMRS (Femur + Tibia)"
    },
    {
      "code" : "stryker_modular_rotating_hinge",
      "display" : "Stryker: Modular Rotating Hinge",
      "definition" : "Stryker: Modular Rotating Hinge (Femur + Tibia)"
    },
    {
      "code" : "stryker_restoris_pfa",
      "display" : "Stryker: Restoris PFA",
      "definition" : "Stryker: Restoris PFA"
    },
    {
      "code" : "stryker_restoris_medial_uni",
      "display" : "Stryker: Restoris Medial Uni",
      "definition" : "Stryker: Restoris Medial Uni"
    },
    {
      "code" : "stryker_restoris_lateral_uni",
      "display" : "Stryker: Restoris Lateral Uni",
      "definition" : "Stryker: Restoris Lateral Uni"
    },
    {
      "code" : "stryker_scorpio",
      "display" : "Stryker: Scorpio",
      "definition" : "Stryker: Scorpio (Tibia)"
    },
    {
      "code" : "stryker_scorpio_all_poly",
      "display" : "Stryker: Scorpio All Poly",
      "definition" : "Stryker: Scorpio All Poly (Tibia)"
    },
    {
      "code" : "stryker_scorpio_cr",
      "display" : "Stryker: Scorpio CR",
      "definition" : "Stryker: Scorpio CR (Femur)"
    },
    {
      "code" : "stryker_scorpio_mobile_bearing",
      "display" : "Stryker: Scorpio + Mobile bearing",
      "definition" : "Stryker: Scorpio + Mobile bearing (Tibia)"
    },
    {
      "code" : "stryker_scorpio_ps",
      "display" : "Stryker: Scorpio PS",
      "definition" : "Stryker: Scorpio PS (Femur)"
    },
    {
      "code" : "stryker_scorpio_ts",
      "display" : "Stryker: Scorpio TS",
      "definition" : "Stryker: Scorpio TS (Femur + Tibia)"
    },
    {
      "code" : "stryker_triathlon",
      "display" : "Stryker: Triathlon",
      "definition" : "Stryker: Triathlon (Tibia)"
    },
    {
      "code" : "stryker_triathlon_all_poly",
      "display" : "Stryker: Triathlon All Poly",
      "definition" : "Stryker: Triathlon All Poly (Tibia)"
    },
    {
      "code" : "stryker_triathlon_cr",
      "display" : "Stryker: Triathlon CR",
      "definition" : "Stryker: Triathlon CR (Femur)"
    },
    {
      "code" : "stryker_thriathlon_pkr",
      "display" : "Stryker: Triathlon PKR",
      "definition" : "Stryker: Triathlon PKR (Femur + Tibia)"
    },
    {
      "code" : "stryker_thriathlon_ps",
      "display" : "Stryker: Triathlon PS",
      "definition" : "Stryker: Triathlon PS (Femur)"
    },
    {
      "code" : "stryker_thriathlon_ts",
      "display" : "Stryker: Triathlon TS",
      "definition" : "Stryker: Triathlon TS (Femur + Tibia)"
    },
    {
      "code" : "stryker_triathlon_universal",
      "display" : "Stryker: Triathlon Universal",
      "definition" : "Stryker: Triathlon Universal (Tibia)"
    },
    {
      "code" : "vanguard_da_360",
      "display" : "Vanguard: DA 360",
      "definition" : "Vanguard: DA 360 (Femur)"
    },
    {
      "code" : "vanguard_da_360_tibia_tray",
      "display" : "Vanguard DA 360 tibia tray",
      "definition" : "Vanguard DA 360 tibia tray (Tibia)"
    },
    {
      "code" : "vanguard_rocc_femur_pps_ha_biomet",
      "display" : "Vanguard: ROCC - Femur PPS + HA Biomet",
      "definition" : "Vanguard: ROCC - Femur PPS + HA Biomet (Femur)"
    },
    {
      "code" : "vanguard_ssk_360",
      "display" : "Vanguard: SSK 360",
      "definition" : "Vanguard: SSK 360 (Femur)"
    },
    {
      "code" : "vanguard_ssk_360_tibia_tray",
      "display" : "Vanguard: SSK 360 tibia tray",
      "definition" : "Vanguard SSK 360 tibia tray (Tibia)"
    },
    {
      "code" : "vanguard_xp",
      "display" : "Vanguard: XP",
      "definition" : "Vanguard: XP (Femur + Tibia)"
    },
    {
      "code" : "vanguard_xp_cr",
      "display" : "Vanguard: XP CR",
      "definition" : "Vanguard XP CR (Tibia)"
    },
    {
      "code" : "wright_advance_medial_pivot",
      "display" : "Wright: Advance Medial Pivot",
      "definition" : "Wright: Advance Medial Pivot (Femur + Tibia)"
    },
    {
      "code" : "wright_advance_revision",
      "display" : "Wright: Advance Revision",
      "definition" : "Wright: Advance Revision (Femur)"
    },
    {
      "code" : "wright_advance_revision_constrained",
      "display" : "Wright: Advance Revision, Constrained",
      "definition" : "Wright: Advance Revision, Constrained (Tibia)"
    },
    {
      "code" : "wright_advance_revision_ps",
      "display" : "Wright: Advance Revision, PS",
      "definition" : "Wright: Advance Revision, PS (Tibia)"
    },
    {
      "code" : "wright_advance_statures",
      "display" : "Wright: Advance Stature",
      "definition" : "Wright: Advance Stature (Femur)"
    },
    {
      "code" : "wright_advance_stemmet",
      "display" : "Wright: Advance Stemmet",
      "definition" : "Wright: Advance Stemmet (Femur)"
    },
    {
      "code" : "zimmer_biomet_oxford_lateral_fixed_bearing",
      "display" : "Zimmer-Biomet: Oxford Lateral Fixed Bearing",
      "definition" : "Zimmer-Biomet: Oxford Lateral Fixed Bearing (Tibia)"
    },
    {
      "code" : "zimmer_insall_burstein",
      "display" : "Zimmer: Insall-Burstein",
      "definition" : "Zimmer: Insall-Burstein (Femur)"
    },
    {
      "code" : "zimmer_miller_galante",
      "display" : "Zimmer: Miller Galante",
      "definition" : "Zimmer: Miller Galante (Femur + Tibia)"
    },
    {
      "code" : "zimmer_nexgen_cr",
      "display" : "Zimmer Biomet: NexGen CR",
      "definition" : "Zimmer Biomet: NexGen CR (Femur + Tibia)"
    },
    {
      "code" : "zimmer_nexgen_cr_flex",
      "display" : "Zimmer: NexGen CR Flex",
      "definition" : "Zimmer: NexGen CR Flex (Femur + Tibia)"
    },
    {
      "code" : "zimmer_nexgen_cr_flex_gender",
      "display" : "Zimmer: NexGen CR Flex Gender",
      "definition" : "Zimmer: NexGen CR Flex Gender (Femur)"
    },
    {
      "code" : "zimmer_nexgen_cr_modular_tmt",
      "display" : "Zimmer Biomet: NexGen CR modulær TMT",
      "definition" : "Zimmer Biomet: NexGen CR modulær TMT (Tibia)"
    },
    {
      "code" : "zimmer_nexgen_cr_monoblock_tmt",
      "display" : "Zimmer Biomet: NexGen CR Monoblok, TMT",
      "definition" : "Zimmer Biomet: NexGen CR Monoblok, TMT (Tibia)"
    },
    {
      "code" : "zimmer_nexgen_lcck",
      "display" : "Zimmer Biomet: NexGen LCCK",
      "definition" : "Zimmer Biomet: NexGen LCCK (Femur + Tibia)"
    },
    {
      "code" : "zimmer_nexgen_lps",
      "display" : "Zimmer Biomet: NexGen LPS",
      "definition" : "Zimmer Biomet: NexGen LPS (Femur + Tibia)"
    },
    {
      "code" : "zimmer_nexgen_lps_flex",
      "display" : "Zimmer Biomet: NexGen LPS Flex",
      "definition" : "Zimmer Biomet: NexGen LPS Flex (Femur + Tibia)"
    },
    {
      "code" : "zimmer_nexgen_lps_modular_tmt",
      "display" : "Zimmer Biomet: NexGen LPS Modulær TMT",
      "definition" : "Zimmer Biomet: NexGen LPS Modulær TMT (Tibia)"
    },
    {
      "code" : "zimmer_nexgen_lps_monoblock_tmt",
      "display" : "Zimmer Biomet: NexGen LPS Monoblok TMT",
      "definition" : "Zimmer Biomet: NexGen LPS Monoblok TMT (Tibia)"
    },
    {
      "code" : "zimmer_nexgen_rhk",
      "display" : "Zimmer Biomet: NexGen RHK",
      "definition" : "Zimmer Biomet: NexGen RHK (Femur + Tibia)"
    },
    {
      "code" : "zimmer_nexgen_pfj",
      "display" : "Zimmer Biomet: PFJ",
      "definition" : "Zimmer Biomet: PFJ (Femur)"
    },
    {
      "code" : "zimmer_segmental_system",
      "display" : "Zimmer: Segmental System",
      "definition" : "Zimmer: Segmental System (Femur)"
    }
  ]
}

```
