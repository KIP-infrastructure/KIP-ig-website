# Cytogenetic resultater 202410 - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cytogenetic resultater 202410**

## ValueSet: Cytogenetic resultater 202410 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CytogeneticResult202410 | *Version*:2.27.0 |
| Active as of 2024-10-02 | *Computable Name*:CytogeneticResult202410 |

 
Cytogenetiske positive fund - DMPN. Valueset erstatter tidligere pr. Okt. 2024 

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
  "id" : "CytogeneticResult202410",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CytogeneticResult202410",
  "version" : "2.27.0",
  "name" : "CytogeneticResult202410",
  "title" : "Cytogenetic resultater 202410",
  "status" : "active",
  "date" : "2024-10-02T00:00:00+02:00",
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
  "description" : "Cytogenetiske positive fund - DMPN. Valueset erstatter tidligere pr. Okt. 2024",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "normal",
        "display" : "Normal undersøgelse"
      },
      {
        "code" : "abnormal",
        "display" : "Andre abnorme molekylærbiologiske fund"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/CytogeneticExamination",
      "concept" : [{
        "code" : "jak2_v617f",
        "display" : "JAK-2 muteret allebyrde (%)"
      },
      {
        "code" : "mpl",
        "display" : "MPL muteret allebyrde (%)"
      },
      {
        "code" : "jak2_exon12",
        "display" : "JAK2 Exon12"
      },
      {
        "code" : "cal-r",
        "display" : "CAL-R muteret allebyrde (%)"
      },
      {
        "code" : "asxl1",
        "display" : "ASXL1"
      }]
    }]
  }
}

```
