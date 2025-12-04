# Diseases - Unspecified without a code - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Diseases - Unspecified without a code**

## CodeSystem: Diseases - Unspecified without a code 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified | *Version*:2.16.0 |
| Active as of 2022-06-07 | *Computable Name*:DiseasesUnspecified |

 
Diseases - Unspecified without a code 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BehandlingsindikationKAR](ValueSet-BehandlingsindikationKAR.md)
* [CytogeneticRiskGrimwade2010](ValueSet-CytogeneticRiskGrimwade2010.md)
* [Cytopeni](ValueSet-Cytopeni.md)
* [DiagnoseDANDEM](ValueSet-DiagnoseDANDEM.md)
* [DiagnoseDMPN](ValueSet-DiagnoseDMPN.md)
* [DiagnoseDMPNopfoelgning](ValueSet-DiagnoseDMPNopfoelgning.md)
* [DiagnosegruppeHAEMA](ValueSet-DiagnosegruppeHAEMA.md)
* [HematologicalDiseases](ValueSet-HematologicalDiseases.md)
* [LocationExtranodalFemale](ValueSet-LocationExtranodalFemale.md)
* [LocationExtranodalMale](ValueSet-LocationExtranodalMale.md)
* [LocationPriSecNodalFemale](ValueSet-LocationPriSecNodalFemale.md)
* [LocationPriSecNodalMale](ValueSet-LocationPriSecNodalMale.md)
* [PatobankSNOMEDDMPNDiagnose](ValueSet-PatobankSNOMEDDMPNDiagnose.md)
* [PatobankSNOMEDDiagnoserLYFO](ValueSet-PatobankSNOMEDDiagnoserLYFO.md)
* [PlasmaDiagnose](ValueSet-PlasmaDiagnose.md)
* [PlasmaDiagnose202412](ValueSet-PlasmaDiagnose202412.md)
* [RegistreringEksklusionHAEMA](ValueSet-RegistreringEksklusionHAEMA.md)
* [RisikofaktorerDMPN](ValueSet-RisikofaktorerDMPN.md)
* [StomiTypeDHDB](ValueSet-StomiTypeDHDB.md)
* [SygdomMedicinskBehandletDHDB](ValueSet-SygdomMedicinskBehandletDHDB.md)
* [VentralHernieCicatriceTypeDHDB](ValueSet-VentralHernieCicatriceTypeDHDB.md)
* [VentralHernieTypeDHDB](ValueSet-VentralHernieTypeDHDB.md)
* [LocationExtranodalFemale_V2](ValueSet-locationExtranodalFemale-V2.md)
* [LocationExtranodalMale_V2](ValueSet-locationExtranodalMale-V2.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "DiseasesUnspecified",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
  "version" : "2.16.0",
  "name" : "DiseasesUnspecified",
  "title" : "Diseases - Unspecified without a code",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Diseases - Unspecified without a code",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 146,
  "concept" : [
    {
      "code" : "diabetes",
      "display" : "Diabetes",
      "definition" : "Diabetes / Diabetes"
    },
    {
      "code" : "heart_disease",
      "display" : "Heart disease",
      "definition" : "Heart disease / Hjertesygdom"
    },
    {
      "code" : "lung_disease",
      "display" : "Lung disease",
      "definition" : "Lung disease / Lungesygdom"
    },
    {
      "code" : "al",
      "display" : "Akut leukæmi (AL)",
      "definition" : "Akut leumæmi (AL)"
    },
    {
      "code" : "cll",
      "display" : "Kronisk lymfatisk leukæmi (CLL)",
      "definition" : "Kronisk lymfatisk leukæmi (CLL)"
    },
    {
      "code" : "lymfom",
      "display" : "Lymfom (LYFO)",
      "definition" : "Lymfom (LYFO)"
    },
    {
      "code" : "mds",
      "display" : "Myelodysplasi (MDS)",
      "definition" : "Myelodysplasi (MDS)"
    },
    {
      "code" : "myeloproliferativ_sygdom",
      "display" : "Myeloproliferativ sygdom",
      "definition" : "Myeloproliferativ sygdom"
    },
    {
      "code" : "myelomatose",
      "display" : "Myelomatose",
      "definition" : "Myelomatose"
    },
    {
      "code" : "M96903",
      "display" : "Follikulært lymfom ukendt grad",
      "definition" : "Follikulært lymfom ukendt grad"
    },
    {
      "code" : "M96913",
      "display" : "Follikulært lymfom grad 1",
      "definition" : "Follikulært lymfom grad 1"
    },
    {
      "code" : "M96953",
      "display" : "Follikulært lymfom grad 2",
      "definition" : "Follikulært lymfom grad 2"
    },
    {
      "code" : "M96983",
      "display" : "Follikulært lymfom grad 3",
      "definition" : "Follikulært lymfom grad 3"
    },
    {
      "code" : "amyloidose<2012",
      "display" : "Amyloidose før 2012",
      "definition" : "Amyloidose før 2012"
    },
    {
      "code" : "all<2005",
      "display" : "ALL før 2005",
      "definition" : "ALL før 2005"
    },
    {
      "code" : "all<2000",
      "display" : "AML før 2000",
      "definition" : "AML før 2000"
    },
    {
      "code" : "cll<2008",
      "display" : "CLL før 2008",
      "definition" : "CLL før 2008"
    },
    {
      "code" : "hodgkin<1998",
      "display" : "Hodgkin diagnosticeret før 1998 (2000 ØstDK)",
      "definition" : "Hodgkin diagnosticeret før 1998 (2000 ØstDK)"
    },
    {
      "code" : "lymfom<1983",
      "display" : "Lymfom diagnosticeret før 1983 (2000 ØstDK)",
      "definition" : "Lymfom diagnosticeret før 1983 (2000 ØstDK)"
    },
    {
      "code" : "mds<2010",
      "display" : "MDS diagnosticeret før 2010",
      "definition" : "MDS diagnosticeret før 2010"
    },
    {
      "code" : "mgus<2013",
      "display" : "MGUS eller Amyloidose før 2013",
      "definition" : "MGUS eller Amyloidose før 2013"
    },
    {
      "code" : "myelom<2005",
      "display" : "Myelomatose diagnosticeret før 2005",
      "definition" : "Myelomatose diagnosticeret før 2005"
    },
    {
      "code" : "mpn<2010",
      "display" : "Myeloproliferativ sygdom diagnosticeret før 2010",
      "definition" : "Myeloproliferativ sygdom diagnosticeret før 2010"
    },
    {
      "code" : "leukaemi_haarcelle",
      "display" : "Hårcelle leukæmi",
      "definition" : "Hårcelle leukæmi"
    },
    {
      "code" : "lgl",
      "display" : "Large Granular Leukemia (LGL)",
      "definition" : "Large Granular Leukemia (LGL)"
    },
    {
      "code" : "t_pll",
      "display" : "T-Prolymfocytleukæmi",
      "definition" : "T-Prolymfocytleukæmi"
    },
    {
      "code" : "myelodysplastic_syndrome",
      "display" : "Myelodysplastic syndrome",
      "definition" : "Myelodysplastic syndrome / Myelodyspl. syndrom (undt. CMML)"
    },
    {
      "code" : "chronic_myelomonocytic_leukemia",
      "display" : "Chronic myelomonocytic leukemia (CMML)",
      "definition" : "Chronic myelomonocytic leukemia / CMML (Kronisk MyeloMonocytLeuk.)"
    },
    {
      "code" : "essential_thrombocytosis",
      "display" : "Essential thrombocytosis",
      "definition" : "Essential thrombocytosis / Ess. thrombocytose"
    },
    {
      "code" : "polycythemia_vera",
      "display" : "Polycythemia vera",
      "definition" : "Polycythemia vera / Polycytæmia vera"
    },
    {
      "code" : "myelofibrosis",
      "display" : "Myelofibrosis",
      "definition" : "Myelofibrosis / Myelofibrose",
      "concept" : [
        {
          "code" : "primary",
          "display" : "Primary myelofibrosis",
          "definition" : "Primary myelofibrosis / Primær Myelofibrose"
        },
        {
          "code" : "prefibrotic",
          "display" : "Prefibrotic myelofibrosis",
          "definition" : "Prefibrotic myelofibrosis / Præfibrotisk Myelofibrose"
        }
      ]
    },
    {
      "code" : "smouldering_mm",
      "display" : "Smouldering MM",
      "definition" : "Smouldering MM"
    },
    {
      "code" : "myelomatosis",
      "display" : "Myelomatosis",
      "definition" : "Myelomatosis / Myelomatose"
    },
    {
      "code" : "solitary_myelom_osseus",
      "display" : "Solitary myelom (osseus)",
      "definition" : "Solitary myelom (osseus) / Solitært myelom (ossøst)"
    },
    {
      "code" : "solitary_myelom_extra_osseus",
      "display" : "Solitary myelom (extra osseus)",
      "definition" : "Solitary myelom (extra osseus) / Solitært myelom (ekstraossøst)"
    },
    {
      "code" : "plasma_cell_leukemia",
      "display" : "Plasma cell leukemia",
      "definition" : "Plasma cell leukemia / Plasmacelleleukæmi"
    },
    {
      "code" : "DD472",
      "display" : "Monoklonal gammopati med ubestemt signifikans (MGUS)",
      "definition" : "Monoklonal gammopati med ubestemt signifikans (MGUS)"
    },
    {
      "code" : "ZM973A3",
      "display" : "Osteosklerotisk myelom (POEMS syndrom)",
      "definition" : "Osteosklerotisk myelom (POEMS syndrom)"
    },
    {
      "code" : "paraprotein_associated_polyneuropathy",
      "display" : "Paraprotein associated polyneuropathy",
      "definition" : "Paraprotein associated polyneuropathy / Paraprotein associeret polyneuropati"
    },
    {
      "code" : "chronic_myeloid_leukemia",
      "display" : "Chronic myeloid leukemia",
      "definition" : "Chronic myeloid leukemia / Kronisk Myeloid Leukæmi (BCR-ABL1 positiv) (CML)"
    },
    {
      "code" : "myeloproliferative_unclassified",
      "display" : "Unclassified myeloproliferative",
      "definition" : "Unclassified myeloproliferative / Uklassificerbar Myeloproliferativ sygdom"
    },
    {
      "code" : "anemia",
      "display" : "Anemia",
      "definition" : "Anemia / Anæmi"
    },
    {
      "code" : "thrombocytopenic_disorder",
      "display" : "Thrombocytopenic disorder",
      "definition" : "Thrombocytopenic disorder / Trombocytopeni"
    },
    {
      "code" : "neutropenia",
      "display" : "Neutropenia",
      "definition" : "Neutropenia / Neutropeni"
    },
    {
      "code" : "alzheimers_dementia",
      "display" : "Alzheimers demens",
      "definition" : "Alzheimers demens"
    },
    {
      "code" : "lewy_body_dementia",
      "display" : "Lewy Body demens",
      "definition" : "Lewy Body demens"
    },
    {
      "code" : "parkinson_dementia",
      "display" : "Parkinson demens",
      "definition" : "Parkinson demens"
    },
    {
      "code" : "vascular_dementia",
      "display" : "Vaskulær demens",
      "definition" : "Vaskulær demens"
    },
    {
      "code" : "mixed_dementia",
      "display" : "Mixed demens (Alzheimers + vaskulær)",
      "definition" : "Mixed demens (Alzheimers + vaskulær)"
    },
    {
      "code" : "frontotemporal_dementia",
      "display" : "Frontotemporal demens",
      "definition" : "Frontotemporal demens"
    },
    {
      "code" : "atypical_parkinson_dementia",
      "display" : "Atypisk Parkinson demens",
      "definition" : "Atypisk Parkinson demens"
    },
    {
      "code" : "hydrocephalus_dementia",
      "display" : "Normaltryks hydrocephalus demens",
      "definition" : "Normaltryks hydrocephalus demens"
    },
    {
      "code" : "huntingtons_chorea_dementia",
      "display" : "Huntingtons Chorea demens",
      "definition" : "Huntingtons Chorea demens"
    },
    {
      "code" : "alchohol_dementia",
      "display" : "Alkohol demens",
      "definition" : "Alkohol demens"
    },
    {
      "code" : "neurodegenerative_dementia",
      "display" : "Neurodegenerativ demens",
      "definition" : "Neurodegenerativ demens"
    },
    {
      "code" : "not_affective_dementia",
      "display" : "Ikke-affektiv demens",
      "definition" : "Ikke-affektiv demens"
    },
    {
      "code" : "affective_dementia",
      "display" : "Affektiv demens",
      "definition" : "Affektiv demens"
    },
    {
      "code" : "ventral_hernia",
      "concept" : [
        {
          "code" : "incisional",
          "display" : "Incisional",
          "definition" : "Incisional / Incisionelt",
          "concept" : [
            {
              "code" : "length_cicatrice"
            },
            {
              "code" : "cross_cicatrice"
            }
          ]
        },
        {
          "code" : "umbilical",
          "display" : "Umbilical",
          "definition" : "Umbilical / Umbilicalt"
        },
        {
          "code" : "linea_alba",
          "display" : "Linea alba",
          "definition" : "Linea alba"
        },
        {
          "code" : "spiegel",
          "display" : "Spiegel",
          "definition" : "Spiegel"
        },
        {
          "code" : "stomi",
          "display" : "Stomi",
          "definition" : "Stomi",
          "concept" : [
            {
              "code" : "stomi_herniotomi",
              "display" : "Stomi and herniotomi",
              "definition" : "Stomi and herniotomi / Stomi og herniotomi"
            }
          ]
        },
        {
          "code" : "port",
          "display" : "Port",
          "definition" : "Port"
        }
      ]
    },
    {
      "code" : "colostomy",
      "display" : "Colostomy",
      "definition" : "Colostomy / Colostomi / SNOMED-CT: 264585001"
    },
    {
      "code" : "ileostomy",
      "display" : "Ileostomy",
      "definition" : "Ileostomy / Ileostomi / SNOMED-CT: 264364002"
    },
    {
      "code" : "urologicalstomy",
      "display" : "Urological stomy",
      "definition" : "Urological stomy / Urostomi / SNOMED-CT: 281601009"
    },
    {
      "code" : "DC00-DC14",
      "display" : "Kræft i læber, mundhule og svælg",
      "definition" : "Kræft i læber, mundhule og svælg"
    },
    {
      "code" : "DC15",
      "display" : "Kræft i spiserøret",
      "definition" : "Kræft i spiserøret"
    },
    {
      "code" : "DC16",
      "display" : "Kræft i mavesækken",
      "definition" : "Kræft i mavesækken"
    },
    {
      "code" : "DC17",
      "display" : "Kræft i tyndtarmen",
      "definition" : "Kræft i tyndtarmen"
    },
    {
      "code" : "DC18-DC20",
      "display" : "Kræft i tyktarm og endetarm",
      "definition" : "Kræft i tyktarm og endetarm"
    },
    {
      "code" : "DC22",
      "display" : "Kræft i leveren og intrahepatiske galdegange",
      "definition" : "Kræft i leveren og intrahepatiske galdegange"
    },
    {
      "code" : "DC25",
      "display" : "Kræft i bugspytkirtlen",
      "definition" : "Kræft i bugspytkirtlen"
    },
    {
      "code" : "DC32",
      "display" : "Kræft i strubehovedet",
      "definition" : "Kræft i strubehovedet"
    },
    {
      "code" : "DC33-DC34",
      "display" : "Kræft i luftrøret og bronkier og lunge",
      "definition" : "Kræft i luftrøret og bronkier og lunge"
    },
    {
      "code" : "DC43",
      "display" : "Modermærkekræft i huden",
      "definition" : "Modermærkekræft i huden"
    },
    {
      "code" : "DC50",
      "display" : "Brystkræft",
      "definition" : "Brystkræft"
    },
    {
      "code" : "DC53",
      "display" : "Kræft i livmoderhalsen",
      "definition" : "Kræft i livmoderhalsen"
    },
    {
      "code" : "DC54-DC55",
      "display" : "Kræft i livmoderen (inkl. uspecifik)",
      "definition" : "Kræft i livmoderen (inkl. uspecifik)"
    },
    {
      "code" : "DC56+DC570-DC574",
      "display" : "Kræft i æggestok og æggeleder",
      "definition" : "Kræft i æggestok og æggeleder"
    },
    {
      "code" : "DC61",
      "display" : "Kræft i blærehalskirtlen",
      "definition" : "Kræft i blærehalskirtlen"
    },
    {
      "code" : "DC62",
      "display" : "Testikelkræft",
      "definition" : "Testikelkræft"
    },
    {
      "code" : "DC67",
      "display" : "Kræft i urinblæren",
      "definition" : "Kræft i urinblæren"
    },
    {
      "code" : "DC64-DC66",
      "display" : "Kræft i nyre, nyrebækken og urinleder",
      "definition" : "Kræft i nyre, nyrebækken og urinleder"
    },
    {
      "code" : "DC70-DC72+DC751-DC753",
      "display" : "Kræft i centralnervesystem",
      "definition" : "Kræft i centralnervesystem"
    },
    {
      "code" : "DC73",
      "display" : "Kræft i skjoldbruskkirtlen",
      "definition" : "Kræft i skjoldbruskkirtlen"
    },
    {
      "code" : "DC81",
      "display" : "Hodgkin lymfomer",
      "definition" : "Hodgkin lymfomer"
    },
    {
      "code" : "DC82-DC85",
      "display" : "Non-hodking malignt lymform",
      "definition" : "Non-hodking malignt lymform"
    },
    {
      "code" : "DC90",
      "display" : "Maligne plasmacelle neoplasier",
      "definition" : "Maligne plasmacelle neoplasier"
    },
    {
      "code" : "DC91-DC95",
      "display" : "Leukæmi",
      "definition" : "Leukæmi"
    },
    {
      "code" : "DC45-DC49",
      "display" : "Kræft i mesotel, bindevæv og andet bløddelsvæv",
      "definition" : "Kræft i mesotel, bindevæv og andet bløddelsvæv"
    },
    {
      "code" : "DC76-DC80",
      "display" : "Kræft med dårligt specificerede, sekundære og ikke specificerede lokalisationer",
      "definition" : "Kræft med dårligt specificerede, sekundære og ikke specificerede lokalisationer"
    },
    {
      "code" : "acute_extremity_ischaemia",
      "display" : "akut ekstremitetsiskæmi",
      "definition" : "akut ekstremitetsiskæmi"
    },
    {
      "code" : "amurosis_fugax",
      "display" : "amaurosis fugax",
      "definition" : "amaurosis fugax"
    },
    {
      "code" : "aneurysm_asymptomatic",
      "display" : "aneurisme - asymptomatisk",
      "definition" : "aneurisme - asymptomatisk"
    },
    {
      "code" : "aneurysm_symptomatic",
      "display" : "aneurisme - symptomatisk",
      "definition" : "aneurisme - symptomatisk"
    },
    {
      "code" : "aneurysm_ruptured",
      "display" : "aneurisme - rumperet",
      "definition" : "aneurisme - rumperet"
    },
    {
      "code" : "aneurysm_clotted",
      "display" : "aneurisme - tromboseret",
      "definition" : "aneurisme - tromboseret"
    },
    {
      "code" : "aneurysm_pseudo",
      "display" : "aneurisme - pseudo",
      "definition" : "aneurisme - pseudo"
    },
    {
      "code" : "aneurysm_mycotic",
      "display" : "aneurisme - mykotisk",
      "definition" : "aneurisme - mykotisk"
    },
    {
      "code" : "bleeding",
      "display" : "blødning / hæmatom",
      "definition" : "blødning / hæmatom"
    },
    {
      "code" : "infection",
      "display" : "infektion (ikke proteseinfektion = 55)",
      "definition" : "infektion (ikke proteseinfektion = 55)"
    },
    {
      "code" : "intestinal_ischaemia",
      "display" : "intestinal iskæmi, angina abdominalis",
      "definition" : "intestinal iskæmi, angina abdominalis"
    },
    {
      "code" : "function_dependent_ischaemia",
      "display" : "funktionsbetinget iskæmi, claudicatio intermittens",
      "definition" : "funktionsbetinget iskæmi, claudicatio intermittens"
    },
    {
      "code" : "chronic_ischaemia_rest_pain",
      "display" : "kronisk iskæmi - hvilesmerter",
      "definition" : "kronisk iskæmi - hvilesmerter"
    },
    {
      "code" : "chronic_ischaemia_wound",
      "display" : "kronisk iskæmi - sår",
      "definition" : "kronisk iskæmi - sår"
    },
    {
      "code" : "chronic_ischaemia_gangrene",
      "display" : "kronisk iskæmi - gangræn",
      "definition" : "kronisk iskæmi - gangræn"
    },
    {
      "code" : "hypertension_renovascular",
      "display" : "renovaskulær hypertension",
      "definition" : "renovaskulær hypertension"
    },
    {
      "code" : "stroke",
      "display" : "stroke",
      "definition" : "stroke"
    },
    {
      "code" : "tos",
      "display" : "thoracic outlet syndrom (TOS)",
      "definition" : "thoracic outlet syndrom (TOS)"
    },
    {
      "code" : "tia",
      "display" : "transitorisk iskæmisk attack (TIA)",
      "definition" : "transitorisk iskæmisk attack (TIA)"
    },
    {
      "code" : "trauma",
      "display" : "traume",
      "definition" : "traume"
    },
    {
      "code" : "thrombosis_vascular_reconstruction",
      "display" : "trombose af karrekonstruktion",
      "definition" : "trombose af karrekonstruktion"
    },
    {
      "code" : "uremia",
      "display" : "uræmi",
      "definition" : "uræmi"
    },
    {
      "code" : "varices",
      "display" : "varicer",
      "definition" : "varicer"
    },
    {
      "code" : "vasospasms",
      "display" : "vasospasme/ Raynaud",
      "definition" : "vasospasme/ Raynaud"
    },
    {
      "code" : "venus_thrombosis",
      "display" : "venetrombose",
      "definition" : "venetrombose"
    },
    {
      "code" : "reconstruction_failure",
      "display" : "truende rekonstruktionssvigt",
      "definition" : "truende rekonstruktionssvigt"
    },
    {
      "code" : "permanent_central_venous_access",
      "display" : "permanent central venøs adgang",
      "definition" : "permanent central venøs adgang"
    },
    {
      "code" : "wound_complication",
      "display" : "sårkomplikation",
      "definition" : "sårkomplikation"
    },
    {
      "code" : "fascial_rupture",
      "display" : "fascieruptur",
      "definition" : "fascieruptur"
    },
    {
      "code" : "ileus",
      "display" : "ileus",
      "definition" : "ileus"
    },
    {
      "code" : "intestine_ischaemia",
      "display" : "tarmiskæmi",
      "definition" : "tarmiskæmi"
    },
    {
      "code" : "aorto/prosthesis_intestinal_fistula",
      "display" : "aorto/protese-instestinal fistel",
      "definition" : "aorto/protese-instestinal fistel"
    },
    {
      "code" : "prosthetic_infection",
      "display" : "proteseinfektion",
      "definition" : "proteseinfektion"
    },
    {
      "code" : "extremity_compartment",
      "display" : "ekstremittets kompartment",
      "definition" : "ekstremittets kompartment"
    },
    {
      "code" : "prolonged_intubation",
      "display" : "langvarig intubation",
      "definition" : "langvarig intubation"
    },
    {
      "code" : "retroperitoneal_fibrosis",
      "display" : "retroperitoneal fibrose",
      "definition" : "retroperitoneal fibrose"
    },
    {
      "code" : "abdominal_compartment",
      "display" : "abdominal kompartment",
      "definition" : "abdominal kompartment"
    },
    {
      "code" : "entrapment",
      "display" : "entrapment",
      "definition" : "entrapment"
    },
    {
      "code" : "emergency_aortic_dissection",
      "display" : "akut aortadissektion",
      "definition" : "akut aortadissektion"
    },
    {
      "code" : "chronic_aortic_dissection",
      "display" : "kronisk aortadissektion",
      "definition" : "kronisk aortadissektion"
    },
    {
      "code" : "dissection_unspecified",
      "display" : "dissektion uden nærmere specifikation",
      "definition" : "dissektion uden nærmere specifikation"
    },
    {
      "code" : "High_grade_B_lymfom_NOS",
      "display" : "High-grade B-lymfom NOS",
      "definition" : "High-grade B-lymfom NOS "
    },
    {
      "code" : "Primært_kutant_CD4_positivt_små_medium_T_celle_lymfom",
      "display" : "Primært kutant CD4-positivt små/medium T-celle lymfom",
      "definition" : "Primært kutant CD4-positivt små/medium T-celle lymfom"
    },
    {
      "code" : "Malignt_lymfom",
      "display" : "Malignt lymfom",
      "definition" : "Malignt lymfom"
    },
    {
      "code" : "non-Hodgkin_malignt_lymfom",
      "display" : "non-Hodgkin malignt lymfom",
      "definition" : "non-Hodgkin malignt lymfom"
    },
    {
      "code" : "ascites_lymfom",
      "display" : "Ascites med lymfomceller",
      "definition" : "Ascites med lymfomceller"
    },
    {
      "code" : "perikardieeksudat_lymfom",
      "display" : "Perikardieeksudat med lymfomceller",
      "definition" : "Perikardieeksudat med lymfomceller"
    },
    {
      "code" : "pleuraeksudat_lymfom",
      "display" : "Pleuraeksudat med lymfomceller"
    }
  ]
}

```
