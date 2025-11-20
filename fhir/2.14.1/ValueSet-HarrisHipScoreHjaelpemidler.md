# Harris Hip Score - Hjælpemidler - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score - Hjælpemidler**

## ValueSet: Harris Hip Score - Hjælpemidler (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HarrisHipScoreHjaelpemidler | *Version*:2.14.1 |
| Active as of 2022-11-15 | *Computable Name*:HarrisHipScoreHjaelpemidler |

 
Harris Hip Score - Hjælpemidler 

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
  "id" : "HarrisHipScoreHjaelpemidler",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HarrisHipScoreHjaelpemidler",
  "version" : "2.14.1",
  "name" : "HarrisHipScoreHjaelpemidler",
  "title" : "Harris Hip Score - Hjælpemidler",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-11-15T00:00:00+02:00",
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
  "description" : "Harris Hip Score - Hjælpemidler",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreSupport",
        "concept" : [
          {
            "code" : "11",
            "display" : "Ingen"
          },
          {
            "code" : "7",
            "display" : "Én stok ved lange ture"
          },
          {
            "code" : "5",
            "display" : "Næsten altid én stok"
          },
          {
            "code" : "3",
            "display" : "Én albue-/aksilkrykke"
          },
          {
            "code" : "2",
            "display" : "To stokke"
          },
          {
            "code" : "0",
            "display" : "To albue-/aksilkrykker eller rollator"
          }
        ]
      }
    ]
  }
}

```
