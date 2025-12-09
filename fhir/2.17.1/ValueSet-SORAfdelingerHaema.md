# SOR: Afdelinger (HÆMA) - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR: Afdelinger (HÆMA)**

## ValueSet: SOR: Afdelinger (HÆMA) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SORAfdelingerHaema | *Version*:2.17.1 |
| Active as of 2022-11-24 | *Computable Name*:SORAfdelingerHaema |

 
SOR: Afdelinger (HÆMA) 

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
  "id" : "SORAfdelingerHaema",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SORAfdelingerHaema",
  "version" : "2.17.1",
  "name" : "SORAfdelingerHaema",
  "title" : "SOR: Afdelinger (HÆMA)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-11-24T00:00:00+02:00",
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
  "description" : "SOR: Afdelinger (HÆMA)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
        "concept" : [
          {
            "code" : "1095041000016007",
            "display" : "Sønderborg"
          },
          {
            "code" : "239081000016004",
            "display" : "Odense"
          },
          {
            "code" : "244701000016009",
            "display" : "Esbjerg"
          },
          {
            "code" : "275721000016002",
            "display" : "Aalborg"
          },
          {
            "code" : "380011000016000",
            "display" : "Roskilde"
          },
          {
            "code" : "384851000016002",
            "display" : "Vejle"
          },
          {
            "code" : "440781000016009",
            "display" : "Aarhus"
          },
          {
            "code" : "900651000016000",
            "display" : "Gødstrup"
          },
          {
            "code" : "926731000016006",
            "display" : "Rigshospitalet"
          }
        ]
      }
    ]
  }
}

```
