# Urin lækker (DUGA) - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Urin lækker (DUGA)**

## ValueSet: Urin lækker (DUGA) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/UrniLaekDUGA | *Version*:2.17.1 |
| Active as of 2024-02-13 | *Computable Name*:UrniLaekDUGA |

 
Hvornår lækker urin (DUGA) 

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
  "id" : "UrniLaekDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/UrniLaekDUGA",
  "version" : "2.17.1",
  "name" : "UrniLaekDUGA",
  "title" : "Urin lækker (DUGA)",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-02-13T00:00:00+02:00",
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
  "description" : "Hvornår lækker urin (DUGA)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HaendelseIndtraeffer",
        "concept" : [
          {
            "code" : "aldrig",
            "display" : "Lækker aldrig urin"
          },
          {
            "code" : "inden-toilet",
            "display" : "Lækker før jeg kan nå på toilettet"
          },
          {
            "code" : "hoste",
            "display" : "Lækker når jeg hoster eller nyser"
          },
          {
            "code" : "sover",
            "display" : "Lækker når jeg sover"
          },
          {
            "code" : "aktiv",
            "display" : "Lækker når jeg er fysisk aktiv"
          },
          {
            "code" : "efter-toilet",
            "display" : "Lækker når jeg er færdig med at lade vandet og har fået tøj på"
          },
          {
            "code" : "uden-grund",
            "display" : "Lækker uden nogen grund"
          },
          {
            "code" : "altid",
            "display" : "Lækker hele tiden"
          }
        ]
      }
    ]
  }
}

```
