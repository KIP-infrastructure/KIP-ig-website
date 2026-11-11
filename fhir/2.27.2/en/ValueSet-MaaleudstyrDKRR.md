# Måleudstyr (DKRR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Måleudstyr (DKRR)**

## ValueSet: Måleudstyr (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MaaleudstyrDKRR | *Version*:2.27.2 |
| Active as of 2022-09-19 | *Computable Name*:MaaleudstyrDKRR |

 
Måleudstyr (DKRR) 

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
  "id" : "MaaleudstyrDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MaaleudstyrDKRR",
  "version" : "2.27.2",
  "name" : "MaaleudstyrDKRR",
  "title" : "Måleudstyr (DKRR)",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Måleudstyr (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MeasurementDevices",
      "concept" : [{
        "code" : "kt-1000_kt-2000",
        "display" : "KT-1000/KT-2000"
      },
      {
        "code" : "rolimeter",
        "display" : "Rolimeter"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
