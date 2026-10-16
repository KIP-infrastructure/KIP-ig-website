# ECOG Performance Status Scale - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ECOG Performance Status Scale**

## ValueSet: ECOG Performance Status Scale 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ECOG | *Version*:2.27.0 |
| Active as of 2022-06-08 | *Computable Name*:ECOG |

 
Valueset for ECOG skalaen 

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
  "id" : "ECOG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ECOG",
  "version" : "2.27.0",
  "name" : "ECOG",
  "title" : "ECOG Performance Status Scale",
  "status" : "active",
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "Valueset for ECOG skalaen",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PerformanceStatusScore",
      "concept" : [{
        "code" : "grade_0",
        "display" : "0: Ingen symptomer"
      },
      {
        "code" : "grade_1",
        "display" : "1: Klarer ikke svær fysisk aktivitet"
      },
      {
        "code" : "grade_2",
        "display" : "2: Klarer ikke moderat fysisk aktivitet"
      },
      {
        "code" : "grade_3",
        "display" : "3: Klarer ikke let fysisk aktivitet"
      },
      {
        "code" : "grade_4",
        "display" : "4: Sengeliggende"
      },
      {
        "code" : "grade_5",
        "display" : "5: Død"
      }]
    }]
  }
}

```
