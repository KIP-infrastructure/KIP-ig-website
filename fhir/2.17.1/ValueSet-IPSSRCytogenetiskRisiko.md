# IPSS-R - Cytogenetisk risiko-score - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IPSS-R - Cytogenetisk risiko-score**

## ValueSet: IPSS-R - Cytogenetisk risiko-score (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IPSSRCytogenetiskRisiko | *Version*:2.17.1 |
| Active as of 2022-06-09 | *Computable Name*:IPSSRCytogenetiskRisiko |

 
IPSS-R - Cytogenetisk risiko-score 

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
  "id" : "IPSSRCytogenetiskRisiko",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IPSSRCytogenetiskRisiko",
  "version" : "2.17.1",
  "name" : "IPSSRCytogenetiskRisiko",
  "title" : "IPSS-R - Cytogenetisk risiko-score",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-09T00:00:00+02:00",
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
  "description" : "IPSS-R - Cytogenetisk risiko-score",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/IPSSRCytogeneticCategory",
        "concept" : [
          {
            "code" : "0",
            "display" : "Very good (-Y, del(11q))"
          },
          {
            "code" : "1",
            "display" : "Good (Normal, del(5q), del(12p), del(20q), double including del(5q))"
          },
          {
            "code" : "2",
            "display" : "Intermediate (del(7q), +8, +19, i(17q), any other sngl./ dobl. indep. clones)"
          },
          {
            "code" : "3",
            "display" : "Poor (-7, inv(3)/t(3q)/del(3q), double including -7/del(7q), complex: 3 abnormalities)"
          },
          {
            "code" : "4",
            "display" : "Very poor (Complex: >3 abnormalities)"
          }
        ]
      }
    ]
  }
}

```
