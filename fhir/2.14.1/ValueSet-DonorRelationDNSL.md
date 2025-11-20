# Relationen til donor (DNSL) - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Relationen til donor (DNSL)**

## ValueSet: Relationen til donor (DNSL) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DonorRelationDNSL | *Version*:2.14.1 |
| Active as of 2024-10-01 | *Computable Name*:DonorRelationDNSL |

 
Familie relation til donor (DNSL) 

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
  "id" : "DonorRelationDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DonorRelationDNSL",
  "version" : "2.14.1",
  "name" : "DonorRelationDNSL",
  "title" : "Relationen til donor (DNSL)",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-10-01T00:00:00+02:00",
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
  "description" : "Familie relation til donor (DNSL)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SNOMEDCT",
        "concept" : [
          {
            "code" : "40683002",
            "display" : "Forælder"
          },
          {
            "code" : "375005",
            "display" : "Søster/Bror"
          },
          {
            "code" : "10896006",
            "display" : "Tvilling (monozygot)"
          },
          {
            "code" : "713369009",
            "display" : "Anden levende familiedonor"
          },
          {
            "code" : "394863008",
            "display" : "Levende non-related donor"
          },
          {
            "code" : "713183000",
            "display" : "Nekronyre"
          },
          {
            "code" : "105457003",
            "display" : "Afdød"
          }
        ]
      }
    ]
  }
}

```
