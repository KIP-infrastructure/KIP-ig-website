# Cytogenetic resultater - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cytogenetic resultater**

## ValueSet: Cytogenetic resultater 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CytogeneticResult | *Version*:2.27.1 |
| Active as of 2022-07-14 | *Computable Name*:CytogeneticResult |

 
Cytogenetiske positive fund - DMPN. Valueset erstattes af nyt fra Okt. 2024 

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
  "id" : "CytogeneticResult",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CytogeneticResult",
  "version" : "2.27.1",
  "name" : "CytogeneticResult",
  "title" : "Cytogenetic resultater",
  "status" : "active",
  "date" : "2022-07-14T00:00:00+02:00",
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
  "description" : "Cytogenetiske positive fund - DMPN. Valueset erstattes af nyt fra Okt. 2024",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "normal",
        "display" : "Normal undersøgelse"
      },
      {
        "code" : "other",
        "display" : "Andre cytogenetiske fund"
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
