# Diagnose (DANDEM) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Diagnose (DANDEM)**

## ValueSet: Diagnose (DANDEM) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DiagnoseDANDEM | *Version*:2.27.0 |
| Active as of 2022-07-19 | *Computable Name*:DiagnoseDANDEM |

 
Diagnose (DANDEM) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "DiagnoseDANDEM",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DiagnoseDANDEM",
  "version" : "2.27.0",
  "name" : "DiagnoseDANDEM",
  "title" : "Diagnose (DANDEM)",
  "status" : "active",
  "date" : "2022-07-19T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Diagnose (DANDEM)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
      "concept" : [{
        "code" : "alzheimers_dementia",
        "display" : "Alzheimer sygdom"
      },
      {
        "code" : "lewy_body_dementia",
        "display" : "Lewy Body sygdom"
      },
      {
        "code" : "parkinson_dementia",
        "display" : "Parkinson sygdom"
      },
      {
        "code" : "vascular_dementia",
        "display" : "Cerebrovaskulær sygdom "
      },
      {
        "code" : "mixed_dementia",
        "display" : "Mixed (Alzheimer + Cerebrovaskulær)"
      },
      {
        "code" : "frontotemporal_dementia",
        "display" : "Frontotemporal demens"
      },
      {
        "code" : "atypical_parkinson_dementia",
        "display" : "Atypisk Parkinson (MSA, CBS, PSP)"
      },
      {
        "code" : "hydrocephalus_dementia",
        "display" : "Normaltryks hydrocephalus (NPH)"
      },
      {
        "code" : "huntingtons_chorea_dementia",
        "display" : "Huntingtons sygdom"
      },
      {
        "code" : "alchohol_dementia",
        "display" : "Alkohol"
      },
      {
        "code" : "neurodegenerative_dementia",
        "display" : "Anden specifik neurodegenerativ sygdom"
      },
      {
        "code" : "not_affective_dementia",
        "display" : "Anden ikke neurodegenerativ sygdom"
      },
      {
        "code" : "affective_dementia",
        "display" : "Psykiatrisk sygdom"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "uncercertain",
        "display" : "Uafklaret ætiologi"
      }]
    }]
  }
}

```
