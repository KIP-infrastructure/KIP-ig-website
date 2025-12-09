# Mesh teknik (DHDB) - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mesh teknik (DHDB)**

## ValueSet: Mesh teknik (DHDB) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MeshTeknikDHDB | *Version*:2.17.1 |
| Active as of 2022-07-21 | *Computable Name*:MeshTeknikDHDB |

 
Mesh teknik (DHDB) 

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
  "id" : "MeshTeknikDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MeshTeknikDHDB",
  "version" : "2.17.1",
  "name" : "MeshTeknikDHDB",
  "title" : "Mesh teknik (DHDB)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-21T00:00:00+02:00",
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
  "description" : "Mesh teknik (DHDB)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MeshTechnique",
        "concept" : [
          {
            "code" : "keyhole",
            "display" : "Keyhole teknik"
          },
          {
            "code" : "sugarbaker",
            "display" : "Sugarbaker teknik"
          },
          {
            "code" : "combined",
            "display" : "Kombineret Keyhole og Sugarbaker teknik"
          },
          {
            "code" : "preperitoneal",
            "display" : "Præperitoneal"
          },
          {
            "code" : "retromuscular",
            "display" : "Retromuskulær"
          }
        ]
      }
    ]
  }
}

```
