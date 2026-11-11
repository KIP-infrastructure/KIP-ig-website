# Disease Stage - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Disease Stage**

## ValueSet: Disease Stage 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Sygdomsfase | *Version*:2.27.2 |
| Active as of 2022-07-18 | *Computable Name*:Sygdomsfase |

 
Sygdomsfase 

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
  "id" : "Sygdomsfase",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Sygdomsfase",
  "version" : "2.27.2",
  "name" : "Sygdomsfase",
  "title" : "Disease Stage",
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
  "description" : "Sygdomsfase",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasePhase",
      "concept" : [{
        "code" : "chronic",
        "display" : "Kronisk fase"
      },
      {
        "code" : "accelerated",
        "display" : "Accelereret fase"
      },
      {
        "code" : "blast_crisis",
        "display" : "Blastkrise"
      }]
    }]
  }
}

```
