# AnastomoseLaekage gradingering - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AnastomoseLaekage gradingering**

## ValueSet: AnastomoseLaekage gradingering (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnastomoseLaekageGradingering | *Version*:2.14.0 |
| Retired as of 2022-10-19 | *Computable Name*:AnastomoseLaekageGradingering |

 
AnastomoseLaekage gradingering 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansions are not generated for retired value sets

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "AnastomoseLaekageGradingering",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnastomoseLaekageGradingering",
  "version" : "2.14.0",
  "name" : "AnastomoseLaekageGradingering",
  "title" : "AnastomoseLaekage gradingering",
  "status" : "retired",
  "experimental" : true,
  "date" : "2022-10-19T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "AnastomoseLaekage gradingering",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisLeakGrading",
        "concept" : [
          {
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
          }
        ]
      }
    ]
  }
}

```
