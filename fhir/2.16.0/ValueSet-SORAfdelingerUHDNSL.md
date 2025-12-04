# SOR: Afdelinger Universitetshospitaler (DNSL) - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR: Afdelinger Universitetshospitaler (DNSL)**

## ValueSet: SOR: Afdelinger Universitetshospitaler (DNSL) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SORAfdelingerUHDNSL | *Version*:2.16.0 |
| Active as of 2024-01-31 | *Computable Name*:SORAfdelingerUHDNSL |

 
SOR: Afdelinger Nyresvigt på nniversitetshospitaler (DNSL) 

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
  "id" : "SORAfdelingerUHDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SORAfdelingerUHDNSL",
  "version" : "2.16.0",
  "name" : "SORAfdelingerUHDNSL",
  "title" : "SOR: Afdelinger Universitetshospitaler (DNSL)",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-01-31T00:00:00+02:00",
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
  "description" : "SOR: Afdelinger Nyresvigt på nniversitetshospitaler (DNSL)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
        "concept" : [
          {
            "code" : "252441000016006",
            "display" : "Rigshospitalet, Nefrologisk Klinik, P (252441000016006)"
          },
          {
            "code" : "239831000016009",
            "display" : "OUH Nyremedicinsk Afdeling Y (239831000016009)"
          },
          {
            "code" : "453111000016005",
            "display" : "Aarhus/Skejby, Nyresygdomme Overafdeling (453111000016005)"
          }
        ]
      }
    ]
  }
}

```
