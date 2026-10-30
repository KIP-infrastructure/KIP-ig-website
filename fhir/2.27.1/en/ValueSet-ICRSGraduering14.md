# ICRS graduering 1-4 - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ICRS graduering 1-4**

## ValueSet: ICRS graduering 1-4 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ICRSGraduering14 | *Version*:2.27.1 |
| Active as of 2022-09-19 | *Computable Name*:ICRSGraduering14 |

 
ICRS graduering 1-4 

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
  "id" : "ICRSGraduering14",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ICRSGraduering14",
  "version" : "2.27.1",
  "name" : "ICRSGraduering14",
  "title" : "ICRS graduering 1-4",
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
  "description" : "ICRS graduering 1-4",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ICRSGradingSystem",
      "concept" : [{
        "code" : "grade_1",
        "display" : "Grad 1: Overfladisk brusklæsion"
      },
      {
        "code" : "grade_2",
        "display" : "Grad 2: Brusklæsion < 50% af brusktykkelse"
      },
      {
        "code" : "grade_3",
        "display" : "Grad 3: Større end 50% af brusktykkelsen"
      },
      {
        "code" : "grade_4",
        "display" : "Grad 4: Blottet knogle eller osteokondral læsion"
      }]
    }]
  }
}

```
