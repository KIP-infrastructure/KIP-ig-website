# Hunt-Hess score - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hunt-Hess score**

## ValueSet: Hunt-Hess score (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HuntHessClassification | *Version*:2.14.0 |
| Active as of 2022-06-28 | *Computable Name*:HuntHessClassification |

 
Hunt-Hess score ud fra klassifikationen. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

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
  "id" : "HuntHessClassification",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HuntHessClassification",
  "version" : "2.14.0",
  "name" : "HuntHessClassification",
  "title" : "Hunt-Hess score",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "Hunt-Hess score ud fra klassifikationen.",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HuntHessClassification",
        "concept" : [
          {
            "code" : "grade_1",
            "display" : "1: Assymptomatisk eller hovedpine med let nakke-rygstivhed"
          },
          {
            "code" : "grade_2",
            "display" : "2: Moderat til svær hovedpine, nakke-rygstivhed evt. med kranienerveudfald."
          },
          {
            "code" : "grade_3",
            "display" : "3: Milde fokale udfald eller tydelig desorientering"
          },
          {
            "code" : "grade_4",
            "display" : "4: Stupor, moderat til svær hemiparese, tidlig decerebrerings rigiditet"
          },
          {
            "code" : "grade_5",
            "display" : "5: Dyb coma, decerebrerings rigiditet, moribund"
          }
        ]
      }
    ]
  }
}

```
