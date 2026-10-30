# ECOG Performance Status Skala til HÆMA specialerne - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ECOG Performance Status Skala til HÆMA specialerne**

## ValueSet: ECOG Performance Status Skala til HÆMA specialerne 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ECOGHAEMA | *Version*:2.27.1 |
| Active as of 2022-07-08 | *Computable Name*:ECOGHAEMA |

 
Denne ECOG er specifik udarbejdet til HÆMA specialerne 

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
  "id" : "ECOGHAEMA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ECOGHAEMA",
  "version" : "2.27.1",
  "name" : "ECOGHAEMA",
  "title" : "ECOG Performance Status Skala til HÆMA specialerne",
  "status" : "active",
  "date" : "2022-07-08T00:00:00+02:00",
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
  "description" : "Denne ECOG er specifik udarbejdet til HÆMA specialerne",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PerformanceStatusScore",
      "concept" : [{
        "code" : "grade_0",
        "display" : "0: Fuldt daglig aktiv"
      },
      {
        "code" : "grade_1",
        "display" : "1: Oppegående"
      },
      {
        "code" : "grade_2",
        "display" : "2: Sengeliggende mindre end 50%"
      },
      {
        "code" : "grade_3",
        "display" : "3: Sengeliggende mere end 50%"
      },
      {
        "code" : "grade_4",
        "display" : "4: 100% Sengeliggende"
      }]
    }]
  }
}

```
