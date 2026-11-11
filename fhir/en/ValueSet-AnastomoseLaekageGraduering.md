# AnastomoseLaekage graduering - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AnastomoseLaekage graduering**

## ValueSet: AnastomoseLaekage graduering 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnastomoseLaekageGraduering | *Version*:2.27.3 |
| Active as of 2022-10-19 | *Computable Name*:AnastomoseLaekageGraduering |

 
AnastomoseLaekage graduering 

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
  "id" : "AnastomoseLaekageGraduering",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnastomoseLaekageGraduering",
  "version" : "2.27.3",
  "name" : "AnastomoseLaekageGraduering",
  "title" : "AnastomoseLaekage graduering",
  "status" : "active",
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
  "description" : "AnastomoseLaekage graduering",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisLeakGrading",
      "concept" : [{
        "code" : "grade_a",
        "display" : "Grad A - Kræver ikke nogen form for aktiv terapeutisk behandling"
      },
      {
        "code" : "grade_b",
        "display" : "Grad B - Kræver aktiv terapeutisk behandling men ikke re-labaroskopi eller re-laparotomi"
      },
      {
        "code" : "grade_c",
        "display" : "Grad C - Kræver aktiv terapeutisk behandling med re-labaroskopi eller re-laparotomi"
      }]
    }]
  }
}

```
