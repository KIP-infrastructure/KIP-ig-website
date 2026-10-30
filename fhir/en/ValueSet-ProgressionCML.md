# Progression CML - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Progression CML**

## ValueSet: Progression CML 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ProgressionCML | *Version*:2.27.1 |
| Active as of 2022-07-18 | *Computable Name*:ProgressionCML |

 
Progression CML 

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
  "id" : "ProgressionCML",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ProgressionCML",
  "version" : "2.27.1",
  "name" : "ProgressionCML",
  "title" : "Progression CML",
  "status" : "active",
  "date" : "2022-07-18T00:00:00+02:00",
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
  "description" : "Progression CML",
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "N",
        "display" : "Nej"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasePhase",
      "concept" : [{
        "code" : "accelerated",
        "display" : "Accelereret fase"
      },
      {
        "code" : "blast_crisis",
        "display" : "Blastkrise / Akut leukæmi"
      }]
    }]
  }
}

```
