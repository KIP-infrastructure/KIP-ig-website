# Udført procedure K1 (DCCG) - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Udført procedure K1 (DCCG)**

## ValueSet: Udført procedure K1 (DCCG) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ProcedureUdfoertK1DCCG | *Version*:2.16.0 |
| Active as of 2023-03-02 | *Computable Name*:ProcedureUdfoertK1DCCG |

 
Udført procedure K1 (DCCG) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 18 concepts

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
  "id" : "ProcedureUdfoertK1DCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ProcedureUdfoertK1DCCG",
  "version" : "2.16.0",
  "name" : "ProcedureUdfoertK1DCCG",
  "title" : "Udført procedure K1 (DCCG)",
  "status" : "active",
  "experimental" : true,
  "date" : "2023-03-02T00:00:00+02:00",
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
  "description" : "Udført procedure K1 (DCCG)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "KJFB20",
            "display" : "Ileocækal resektion - KJFB20"
          },
          {
            "code" : "KJFB30",
            "display" : "Højresidig hemikolektomi - KJFB30"
          },
          {
            "code" : "KJFB30A",
            "display" : "Udvidet højresidig hemikolektomi - KJFB30A"
          },
          {
            "code" : "KJFB40",
            "display" : "Resektion af colon transversum - KJFB40"
          },
          {
            "code" : "KJFB53",
            "display" : "Resektion af venstre fleksur - KJFB53"
          },
          {
            "code" : "KJFB43",
            "display" : "Venstresidig hemikolektomi - KJFB43"
          },
          {
            "code" : "KJFB46",
            "display" : "Resektion af colon sigmoideum - KJFB46"
          },
          {
            "code" : "KJFB60",
            "display" : "Resektion af colon sigmoideum med kolostomi - KJFB60"
          },
          {
            "code" : "KJFB34",
            "display" : "Anden laparoskopisk samtidig resektion af tyndtarm og tyktarm - KJFB34"
          },
          {
            "code" : "KJFB50",
            "display" : "Anden colonresektion - KJFB50"
          },
          {
            "code" : "KJFB63",
            "display" : "Anden tyktarmsresektion med kolostomi og distal lukning - KJFB63"
          },
          {
            "code" : "KJFH00",
            "display" : "Kolektomi og ileorektostomi - KJFH00"
          },
          {
            "code" : "KJFH10",
            "display" : "Kolektomi og ileostomi - KJFH10"
          },
          {
            "code" : "KJGB00",
            "display" : "Resektion af endetarm - KJGB00"
          },
          {
            "code" : "KJGB10",
            "display" : "Resektion af endetarm med kolostomi - KJGB10"
          },
          {
            "code" : "KJFH20",
            "display" : "Proktokolektomi og ileostomi - KJFH20"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
        "concept" : [
          {
            "code" : "proctocolectomy_pouch",
            "display" : "Proktokolektomi med ileoanal pouch"
          },
          {
            "code" : "cels",
            "display" : "Kombineret endoskopisk og laparoskopisk procedure (CELS)"
          }
        ]
      }
    ]
  }
}

```
