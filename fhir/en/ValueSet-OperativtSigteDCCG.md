# Operativt Sigte DCCG - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operativt Sigte DCCG**

## ValueSet: Operativt Sigte DCCG 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperativtSigteDCCG | *Version*:2.27.0 |
| Active as of 2022-09-07 | *Computable Name*:OperativtSigteDCCG |

 
Operativt Sigte DCCG 

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
  "id" : "OperativtSigteDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperativtSigteDCCG",
  "version" : "2.27.0",
  "name" : "OperativtSigteDCCG",
  "title" : "Operativt Sigte DCCG",
  "status" : "active",
  "date" : "2022-09-07T00:00:00+02:00",
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
  "description" : "Operativt Sigte DCCG",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentIntention",
      "concept" : [{
        "code" : "curative",
        "display" : "Kurativ"
      },
      {
        "code" : "compromised_resection",
        "display" : "Compromiteret resektion"
      },
      {
        "code" : "palliative",
        "display" : "Palliativt"
      }]
    }]
  }
}

```
