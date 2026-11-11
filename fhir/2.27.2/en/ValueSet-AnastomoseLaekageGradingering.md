# AnastomoseLaekage gradingering - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AnastomoseLaekage gradingering**

## ValueSet: AnastomoseLaekage gradingering 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnastomoseLaekageGradingering | *Version*:2.27.2 |
| Retired as of 2022-10-19 | *Computable Name*:AnastomoseLaekageGradingering |

 
AnastomoseLaekage gradingering 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansions are not generated for retired value sets

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "AnastomoseLaekageGradingering",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnastomoseLaekageGradingering",
  "version" : "2.27.2",
  "name" : "AnastomoseLaekageGradingering",
  "title" : "AnastomoseLaekage gradingering",
  "status" : "retired",
  "date" : "2022-10-19T00:00:00+02:00",
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
  "description" : "AnastomoseLaekage gradingering",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisLeakGrading",
      "concept" : [{
        "code" : "grade_a",
        "display" : "Grade A - subklinisk/radiologisk"
      },
      {
        "code" : "grade_b",
        "display" : "Grade B - klinisk lokal peritonit"
      },
      {
        "code" : "grade_c",
        "display" : "Grade C - klinisk generaliseret peritonit"
      }]
    }]
  }
}

```
